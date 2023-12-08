<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Patner;
use Illuminate\Support\Facades\Validator;

class PatnerController extends Controller
{
    public function Pt()
    {
        $allData = Patner::all();
        return view('backend.main-section.page.home.patner.view',compact('allData'));
    }

    public function PtAdd()
    {
        $data ['patner'] = Patner::all();
        return view('backend.main-section.page.home.patner.add',$data);
    }

    public function PtStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        $data = new Patner();
        $data->title = $request->title;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        $data->save();

        return redirect()->route('pt.view');
    }

    public function PtEdit($id)
    {
        $editData = Patner::find($id);
        return view('backend.main-section.page.home.patner.edit',compact('editData'));
    }

    public function PtUpdate(Request $request,$id)
    {
        $data = Patner::find($id);
        $data->title = $request->title;
       

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('backend/all-images/web/channel/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }


        $data->save();
        $notification = array(
            'message' => 'Patner Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('pt.view')->with($notification);
    }

    public function PtStatus($id)
    {
        $getStatus = Patner::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Patner::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Patner::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Patner::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Patner Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Patner Found.'
            ]);
        }
    }
}
