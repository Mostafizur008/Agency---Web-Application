<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function Ct()
    {
        $allData = Category::all();
        return view('backend.main-section.page.category.category.view',compact('allData'));
    }

    public function CtStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $data = new Category();
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->save();

        return redirect()->route('ct.view');
    }

    public function CtEdit($id)
    {
        $allData = Category::all();
        $editData = Category::find($id);
    
        return view('backend.main-section.page.category.category.view', compact('allData', 'editData'));
    }

    public function CtUpdate(Request $request,$id)
    {
        $data = Category::find($id);
        $data->name = $request->name;
        $data->slug = $request->slug;

        $data->save();
        $notification = array(
            'message' => 'Benefit Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('ct.view')->with($notification);
    }

    public function CtStatus($id)
    {
        $getStatus = Category::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Category::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Category::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Category::find($id);
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
