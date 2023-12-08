<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Category;
use App\Models\Category\Subcategory;
use App\Models\Home\Service;

class PostController extends Controller
{
    public function Ps($sub_category_id)
    {
        $allData = Service::where('sub_category_id', $sub_category_id)->get();
        $categories = Category::all();
        $sub = Subcategory::all();
        return view('frontend.pagelayer.home.post',compact('sub', 'categories','allData'));
    }

    public function Pd($id)
    {
        $allData = Service::find($id);
        $categories = Category::all();
        $sub = Subcategory::all();
        return view('frontend.pagelayer.home.post_detail',compact('sub', 'categories','allData'));
    }
}
