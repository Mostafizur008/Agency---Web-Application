<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Clients;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    public function Client()
    {
        $allData = Clients::all();
        return view('backend.main-section.page.home.client.view',compact('allData'));
    }

    public function ClientAdd()
    {
        $data ['clients'] = Clients::all();
        return view('backend.main-section.page.home.client.add',$data);
    }

    public function ClientStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        $data = new Clients();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->address = $request->address;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        $data->save();

        return redirect()->route('clients.view');
    }

    public function ClientEdit($id)
    {
        $editData = Clients::find($id);
        return view('backend.main-section.page.home.client.edit',compact('editData'));
    }

    public function ClientUpdate(Request $request,$id)
    {
        $data = Clients::find($id);
        $data->title = $request->title;
        $data->address = $request->address;
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
            'message' => 'Client Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('clients.view')->with($notification);
    }

    public function ClientStatus($id)
    {
        $getStatus = Clients::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Clients::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Clients::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Clients::find($id);
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
