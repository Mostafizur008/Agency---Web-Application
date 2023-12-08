<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Live\Channel;
use App\Models\Home\Service;
use App\Models\Home\Faker;
use App\Models\Others\Info\Info;

use DB;

class HomeController extends Controller
{
    public function Home()
    {
        $categories = DB::table('categories')->get();

        foreach ($categories as $category) {
            $category->subcategories = DB::table('subcategories')->where('category_id', $category->id)->get();
        }

        $allData = Channel::all();
        $kar = Faker::all();
        $categories = $categories;
        $data = Service::where('status', '1')->paginate(8);
        return view('frontend.pagelayer.home.main', compact('kar', 'categories','allData','categories','data'));

    }

    public function loadMoreProducts(Request $request)
    {
        $page = $request->input('page');
        $perPage = 4;

        $data = Service::where('status', '1')->paginate($perPage, ['*'], 'page', $page);

        return response()->json(['html' => view('partials.product-list')->with(['data' => $data])->render()]);
    }

    public function Info(Request $request)
    {
        $data = new Info();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return redirect()->route('contact');
    }

}

