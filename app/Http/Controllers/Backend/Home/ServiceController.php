<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Service;
use App\Models\Category\Category;
use App\Models\Category\Subcategory;
use Illuminate\Support\Facades\Validator;
use DB;

class ServiceController extends Controller
{
    public function Se()
    {
        $allData = Category::with('subcategories')->get();
        $allCategories = Category::all();
        $Data = Service::with('category')->get();
        
        return view('backend.main-section.page.home.service.view', compact('Data', 'allData', 'allCategories'));
    }
    

    public function SeStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'summery' => 'required',
        ]);
    
        // Retrieve category ID based on sub_category_id
        $subcategory = DB::table('subcategories')->where('id', $request->sub_category_id)->first();
    
        // Check if a valid subcategory is retrieved
        if ($subcategory && property_exists($subcategory, 'category_id')) {
            $catagoryId = $subcategory->category_id;
    
            $data = new Service();
            $data->category_id = $catagoryId; // Use the retrieved category ID
            $data->sub_category_id = $request->sub_category_id;
            $data->title = $request->title;
            $data->summery = $request->summery;
            $data->gar = $request->gar;
            $data->war = $request->war;
            $data->made = $request->made;
            $data->price = $request->price;
    
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('backend/all-images/web/channel/'), $filename);
                $data->image = $filename;
            }
    
            $data->save();
    
            return redirect()->route('se.view');
        } else {
            // Handle the case where no valid subcategory is found
            return back()->with('error', 'Invalid subcategory ID or missing category_id property');
        }
    }
    
    

    public function SeEdit($id)
    {
        $allData = Category::with('subcategories')->get();
        $allCategories = Category::all();
        $Data = Service::all();
        $editData = Service::find($id);
    
        return view('backend.main-section.page.home.service.view', compact('Data', 'allData', 'allCategories', 'editData'));
    }

    public function SeUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'summery' => 'required',
        ]);

        // Retrieve category ID based on sub_category_id
        $subcategory = DB::table('subcategories')->where('id', $request->sub_category_id)->first();
    
        // Check if a valid subcategory is retrieved
        if ($subcategory && property_exists($subcategory, 'category_id')) {
            $catagoryId = $subcategory->category_id;

        $data = Service::find($id);
        $data->category_id = $catagoryId;
        $data->sub_category_id = $request->sub_category_id;
        $data->title = $request->title;
        $data->summery = $request->summery;
        $data->gar = $request->gar;
        $data->war = $request->war;
        $data->made = $request->made;
        $data->price = $request->price;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        $data->save();
    
        return redirect()->route('se.view');
        } else {
           return back()->with('se.view');
        }
    }

    public function SeStatus($id)
    {
        $getStatus = Service::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Service::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = Service::find($id);
    
        if ($data) {
            $data->delete();
            $notification = ['message' => 'Subcategory deleted successfully', 'alert-type' => 'success'];
            return redirect()->route('se.view')->with($notification);
        } else {
            $notification = ['message' => 'Subcategory not found', 'alert-type' => 'error'];
            return redirect()->route('se.view')->with($notification);
        }
    }
}
