<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Supplier;
use App\Models\Category\Category;

class SuppliersController extends Controller
{
    public function Supplier()
    {
        $categories = Category::all();
        $allData = Supplier::where('status', '1')->paginate(8);
        return view('frontend.pagelayer.home.supplier',compact('allData', 'categories'));
    }
}
