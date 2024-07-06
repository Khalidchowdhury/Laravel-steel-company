<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productsPaginate = Product::with('category')->get();
        $products = Product::all();
        return view('products.index', compact('products', 'productsPaginate'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
            'thumbnail_image' => 'required|image',
            'product_image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
            'bullet_points' => 'array',
            'bullet_points.*.title' => 'required_with:bullet_points.*.description',
            'bullet_points.*.description' => 'required_with:bullet_points.*.title',
        ]);

        $thumbnailPath = $request->file('thumbnail_image')->store('thumbnails', 'public');
        $productImagePath = $request->file('product_image')->store('product_images', 'public');

        $product = Product::create([
            'title' => $validatedData['title'],
            'short_title' => $validatedData['short_title'],
            'description' => $validatedData['description'],
            'thumbnail_image' => $thumbnailPath,
            'product_image' => $productImagePath,
            'category_id' => $validatedData['category_id'],
        ]);

        if ($request->has('bullet_points')) {
            foreach ($request->bullet_points as $bulletPoint) {
                $product->bulletPoints()->create($bulletPoint);
            }
        }

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'description' => 'required',
            'thumbnail_image' => 'sometimes|image',
            'product_image' => 'sometimes|image',
            'category_id' => 'required|exists:categories,id',
            'bullet_points' => 'array',
            'bullet_points.*.title' => 'required_with:bullet_points.*.description',
            'bullet_points.*.description' => 'required_with:bullet_points.*.title',
        ]);

        if ($request->hasFile('thumbnail_image')) {
            $thumbnailPath = $request->file('thumbnail_image')->store('thumbnails', 'public');
            $validatedData['thumbnail_image'] = $thumbnailPath;
        }

        if ($request->hasFile('product_image')) {
            $productImagePath = $request->file('product_image')->store('product_images', 'public');
            $validatedData['product_image'] = $productImagePath;
        }

        $product->update($validatedData);

        $product->bulletPoints()->delete();
        if ($request->has('bullet_points')) {
            foreach ($request->bullet_points as $bulletPoint) {
                $product->bulletPoints()->create($bulletPoint);
            }
        }

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}












