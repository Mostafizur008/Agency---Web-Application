<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Team;
use Illuminate\Support\Facades\Validator;

class TeamsController extends Controller
{
    public function Teams()
    {
        $allData = Team::all();
        return view('backend.main-section.page.home.team.view',compact('allData'));
    }

    public function TeamsAdd()
    {
        $data ['team'] = Team::all();
        return view('backend.main-section.page.home.team.add',$data);
    }

    public function TeamsStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $data = new Team();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->mobile = $request->mobile;
        $data->experience = $request->experience;
        $data->address = $request->address;
        $data->rate = $request->rate;
        $data->work = $request->work;
        $data->satisfied = $request->satisfied;
        $data->summery = $request->summery;
        $data->fb = $request->fb;
        $data->tw = $request->tw;
        $data->wh = $request->wh;
        $data->in = $request->in;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        if($request->file('photo'))
        {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->route('team.view');
    }

    public function TeamsEdit($id)
    {
        $editData = Team::find($id);
        return view('backend.main-section.page.home.team.edit',compact('editData'));
    }

    public function TeamsUpdate(Request $request,$id)
    {
        $data = Team::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->mobile = $request->mobile;
        $data->experience = $request->experience;
        $data->address = $request->address;
        $data->rate = $request->rate;
        $data->work = $request->work;
        $data->satisfied = $request->satisfied;
        $data->summery = $request->summery;
        $data->fb = $request->fb;
        $data->tw = $request->tw;
        $data->wh = $request->wh;
        $data->in = $request->in;

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('backend/all-images/web/channel/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        if($request->file('photo'))
        {
            $file = $request->file('photo');
            @unlink(public_path('backend/all-images/web/channel/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['photo'] = $filename;
        }


        $data->save();
        $notification = array(
            'message' => 'Team Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('team.view')->with($notification);
    }

    public function TeamsStatus($id)
    {
        $getStatus = Team::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Team::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Team::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Team::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Team Deleted Successfully.'
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
