<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Faker;

class FakerController extends Controller
{
    public function Kr()
    {
        $allData = Faker::all();
        
        return view('backend.main-section.page.home.faker.view', compact('allData'));
    }
    

    public function KrStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'count' => 'required',
        ]);
    
            $data = new Faker();
            $data->name = $request->name;
            $data->count = $request->count;
    
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('backend/all-images/web/channel/'), $filename);
                $data->image = $filename;
            }
    
            $data->save();
    
            return redirect()->route('kr.view');
    }
    
    

    public function KrEdit($id)
    {
        $allData = Faker::all();
        $editData = Faker::find($id);
    
        return view('backend.main-section.page.home.faker.view', compact('allData', 'editData'));
    }

    public function KrUpdate(Request $request,$id)
    {
        

        $data = Faker::find($id);
        $data->name = $request->name;
        $data->count = $request->count;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        $data->save();
        return redirect()->route('kr.view');
    }

    public function KrStatus($id)
    {
        $getStatus = Faker::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Faker::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Faker::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Faker::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Client Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Team Found.'
            ]);
        }
    }
}
