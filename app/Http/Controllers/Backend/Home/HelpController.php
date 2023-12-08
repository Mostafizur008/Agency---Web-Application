<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Help;

class HelpController extends Controller
{
    public function Hl()
    {
        $allData = Help::all();
        return view('backend.main-section.page.home.help.view',compact('allData'));
    }

    public function HlStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
        ]);

        $data = new Help();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->time = $request->time;
        $data->save();

        return redirect()->route('hl.view');
    }

    public function HlEdit($id)
    {
        $allData = Help::all();
        $editData = Help::find($id);
    
        return view('backend.main-section.page.home.help.view', compact('allData', 'editData'));
    }

    public function HlUpdate(Request $request,$id)
    {
        $data = Help::find($id);
        $data->name = $request->name;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->time = $request->time;

        $data->save();
        $notification = array(
            'message' => 'Benefit Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('hl.view')->with($notification);
    }

    public function HlStatus($id)
    {
        $getStatus = Help::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Help::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Help::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Help::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Category Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Category Found.'
            ]);
        }
    }
}
