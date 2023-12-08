<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Product;
use App\Models\Category\Category;

class ServicesController extends Controller
{
    public function Sh ()
    {
        $allData = Product::all();
        $categories = Category::all();
        return view('frontend.pagelayer.home.service',compact('allData','categories'));
    }
}
