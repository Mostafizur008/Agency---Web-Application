<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\About;
use Illuminate\Support\Facades\Validator;
use DB;

class AboutusController extends Controller
{
    public function AboutView()
    {
        return view('backend.main-section.page.home.about')->with('abouts',About::first());
    }


    public function AboutUpdate(Request $request)
    {
            $abouts = About::first();
            $abouts->owner = $request->owner;
            $abouts->mission = $request->mission;
            $abouts->vission = $request->vission;
            $abouts->since = $request->since;

            if($request->file('image')){
                $file= $request->file('image');
                @unlink(public_path('backend/all-images/web/all/'.$abouts->image));
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('backend/all-images/web/all/'), $filename);
                $abouts['image']= $filename;
            }

            if($request->file('photo')){
                $file= $request->file('photo');
                @unlink(public_path('backend/all-images/web/all/'.$abouts->photo));
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('backend/all-images/web/all/'), $filename);
                $abouts['photo']= $filename;
            }

            if($request->file('ico')){
                $file= $request->file('ico');
                @unlink(public_path('backend/all-images/web/all/'.$abouts->ico));
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('backend/all-images/web/all/'), $filename);
                $abouts['ico']= $filename;
            }

            $abouts->save();

        return redirect()->route('about.view');
    }
}
