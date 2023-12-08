<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Help;
use App\Models\Category\Category;

class HelpsController extends Controller
{
    public function Help ()
    {
        $allData = Help::all();
        $categories = Category::all();
        return view('frontend.pagelayer.home.help',compact('allData','categories'));
    }
}
