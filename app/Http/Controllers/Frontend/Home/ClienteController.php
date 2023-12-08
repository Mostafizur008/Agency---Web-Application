<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Clients;
use App\Models\Category\Category;

class ClienteController extends Controller
{
    public function Cl()
    {
        $categories = Category::all();
        $allData = Clients::where('status', '1')->paginate(12);
        return view('frontend.pagelayer.home.client',compact('allData','categories'));
    }
}
