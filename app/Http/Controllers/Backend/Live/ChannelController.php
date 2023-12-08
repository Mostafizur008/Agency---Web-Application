<?php

namespace App\Http\Controllers\Backend\Live;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Live\Channel;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ChannelController extends Controller
{
    public function Live()
    {
        $allData = Channel::all();
        return view('backend.main-section.page.live.list',compact('allData'));
    }

    public function LiveAdd()
    {
        $data ['user'] = User::all();
        return view('backend.main-section.page.live.add',$data);
    }

    public function LiveStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|dimensions:min_width=1370,min_height=485,max_width=1920,max_height=1080',
        ]);
        $data = new Channel();
        $data->title = $request->title;
        $data->description = $request->description;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        $data->save();

        return redirect()->route('live.view');
    }

    public function LiveEdit($id)
    {
        $editData = Channel::find($id);
        return view('backend.main-section.page.live.edit',compact('editData'));
    }

    public function LiveUpdate(Request $request,$id)
    {
        $data = Channel::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

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
            'message' => 'User Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('live.view')->with($notification);
    }

    public function ChangeStatus($id)
    {
        $getStatus = Channel::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Channel::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Info::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Channel::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Student Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }
    }
}
