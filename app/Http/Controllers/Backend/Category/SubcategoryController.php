<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Category;
use App\Models\Category\Subcategory;
use Illuminate\Support\Facades\Validator;

class SubcategoryController extends Controller
{
    public function Sc()
    {
        $allData = Subcategory::all();
        $allCategories = Category::all();
        return view('backend.main-section.page.category.sub_category.view', compact('allData', 'allCategories'));
    }

    public function ScStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $data = new Subcategory();
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->save();

        return redirect()->route('sc.view');
    }

    public function ScEdit($id)
    {
        $allData = Subcategory::all();
        $editData = Subcategory::find($id);
        $allCategories = Category::all();
    
        return view('backend.main-section.page.category.sub_category.view', compact('allData', 'editData', 'allCategories'));
    }

    public function ScUpdate(Request $request,$id)
    {
        $data = Subcategory::find($id);
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->slug = $request->slug;

        $data->save();
        $notification = array(
            'message' => 'Subcategory Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('sc.view')->with($notification);
    }

    public function ScStatus($id)
    {
        $getStatus = Subcategory::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Subcategory::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $data = Subcategory::find($id);
    
        if ($data) {
            $data->delete();
            $notification = ['message' => 'Subcategory deleted successfully', 'alert-type' => 'success'];
            return redirect()->route('sc.view')->with($notification);
        } else {
            $notification = ['message' => 'Subcategory not found', 'alert-type' => 'error'];
            return redirect()->route('sc.view')->with($notification);
        }
    }
    

}
