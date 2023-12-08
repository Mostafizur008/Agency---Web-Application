<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Category;
use App\Models\Others\Info\Info;

class ContactController extends Controller
{
    public function Contact()
    {
        $categories = Category::all();
        return view('frontend.pagelayer.home.contact',compact('categories'));
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

        $notification = array(
            'message' => 'Message Successfully Send',
            'alert-type' => 'info'
        );

        return redirect()->route('contact')->with('notification', $notification);
    }
}
