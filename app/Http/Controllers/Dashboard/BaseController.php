<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class BaseController extends Controller
{

    public function dashboard(){
        $totalCategory=Category::count() +1 ;
        $totalProduct=Product::count();
        return view('Dashboard.dashboard', compact('totalCategory','totalProduct'));
    }
}
