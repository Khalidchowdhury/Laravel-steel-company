<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Product;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class WebsiteController extends Controller
{
    public function home()
    {

        $structuralProduct = Product::query()->where('category_id',6)->get();
        $pipeProduct = Product::query()->where('category_id',7)->get();
        $flowProduct = Product::query()->where('category_id',13)->get();
        return view('Frontend.home',compact('structuralProduct','pipeProduct','flowProduct'));
        
    }

    public function allProducts()
    {
        $products = Product::query()->latest()->get();
        $productsPaginate = Product::paginate(2);
        return view('Frontend.product-list',compact('products', 'productsPaginate'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('Frontend.product',compact('product'));
    }

    public function contact()
    {
        $contacts = Contact::first();
        return view('Frontend.contact', compact('contacts'));
    }
    public function engineeringProduts()
    {
        return view('Frontend.engineeringProduts');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function search(Request $request)
    {

        $keyword = $request->input('q');
        $products = Product::query()->where('title','like','%'.$_REQUEST['q'].'%')->get();
            if ($products->isEmpty()) {
                return view('Frontend.search-not-found', ['products' => $products], compact('keyword'));
            }
        $resultCount = $products->count();
        return view('Frontend.search-product-list',compact('products', 'resultCount', 'keyword'));

    }

    public function sitemap()
    {
        return view('Frontend.sitemap');
    }

    
    public function submitForm(Request $request)
        {
        
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);
            
        $recaptcha_response = $request->input('g-recaptcha-response');

            
        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('status', 'Please Complete the Recaptcha to proceed')->with('url_fragment', '#contactBack');
        }
    
            $data = ([
                'first_name'  => $request ->first_name,
                'last_name'   => $request ->last_name,
                'phone'       => $request ->phone,
                'email'       => $request ->email,
                'company'     => $request ->company,
                'country'     => $request ->country,
                'subject'     => $request ->subject,
                'massage'     => $request ->massage,
                
            ]);
            

            Mail::to('khalidchowdhury90@gmail.com')->send(new ContactFormMail($data));
        
            try {
 
            return redirect()->back()->with('success', 'Your message has been sent successfully!')->with('url_fragment', '#contactBack');
            } catch (\Exception $e) {
   
            return redirect()->back()->with(['status', 'There was an error submitting your message.'])->with('url_fragment', '#contactBack');
            }
            
        
        }

    // category Controller 
    public function category($id)
    {
        $category = Category::find($id);
        $categoryProducts = Product::query()->where('category_id',$id)->get();
        return view('Frontend.category-list',compact('categoryProducts','category'));
    }
}
