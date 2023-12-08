<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Supplier;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function Supplier()
    {
        $allData = Supplier::all();
        return view('backend.main-section.page.home.supplier.view',compact('allData'));
    }

    public function SupplierAdd()
    {
        $data ['supplier'] = Supplier::all();
        return view('backend.main-section.page.home.supplier.add',$data);
    }

    public function SupplierStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        $data = new Supplier();
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

        return redirect()->route('supplier.view');
    }

    public function SupplierEdit($id)
    {
        $editData = Supplier::find($id);
        return view('backend.main-section.page.home.supplier.edit',compact('editData'));
    }

    public function SupplierUpdate(Request $request,$id)
    {
        $data = Supplier::find($id);
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
            'message' => 'Supplier Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('supplier.view')->with($notification);
    }

    public function SupplierStatus($id)
    {
        $getStatus = Supplier::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Supplier::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Supplier::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Supplier::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Supplier Deleted Successfully.'
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
