<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Benifit;
use Illuminate\Support\Facades\Validator;

class BenifitsController extends Controller
{
    public function Bn()
    {
        $allData = Benifit::all();
        return view('backend.main-section.page.home.benifit.view',compact('allData'));
    }

    public function BnAdd()
    {
        $data ['benifit'] = Benifit::all();
        return view('backend.main-section.page.home.benifit.add',$data);
    }

    public function BnStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        $data = new Benifit();
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

        return redirect()->route('bn.view');
    }

    public function BnEdit($id)
    {
        $editData = Benifit::find($id);
        return view('backend.main-section.page.home.benifit.edit',compact('editData'));
    }

    public function BnUpdate(Request $request,$id)
    {
        $data = Benifit::find($id);
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
            'message' => 'Benefit Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('bn.view')->with($notification);
    }

    public function BnStatus($id)
    {
        $getStatus = Benifit::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Benifit::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Benifit::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Benifit::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Benefit Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Benefit Found.'
            ]);
        }
    }
}
