<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\About;
use App\Models\Category\Category;

class AboutController extends Controller
{
    public function About()
    {
        $categories = Category::all();
        $data ['allData'] = About::all();
        return view('frontend.pagelayer.home.about',compact('data','categories'));
    }
}
