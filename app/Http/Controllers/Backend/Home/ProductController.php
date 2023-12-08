<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Product;
use App\Models\Category\Category;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function Pe()
    {
        $allCategories = Category::all();
        $allData = Product::all();
        
        return view('backend.main-section.page.home.product.view', compact('allData', 'allCategories'));
    }
    

    public function PeStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'summery' => 'required',
        ]);
    
            $data = new Product();
            $data->title = $request->title;
            $data->summery = $request->summery;
    
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('backend/all-images/web/channel/'), $filename);
                $data->image = $filename;
            }
    
            $data->save();
    
            return redirect()->route('pe.view');
    }
    
    

    public function PeEdit($id)
    {
        $allData = Product::all();
        $allCategories = Category::all();
        $editData = Product::find($id);
    
        return view('backend.main-section.page.home.product.view', compact('allData', 'allCategories', 'editData'));
    }

    public function PeUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'summery' => 'required',
        ]);

        $data = Product::find($id);
        $data->title = $request->title;
        $data->summery = $request->summery;

        if($request->file('image'))
        {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/all-images/web/channel/'),$filename);
            $data['image'] = $filename;
        }

        $data->save();
        return redirect()->route('pe.view');
    }

    public function PeStatus($id)
    {
        $getStatus = Product::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        Product::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = Product::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Product::find($id);
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
