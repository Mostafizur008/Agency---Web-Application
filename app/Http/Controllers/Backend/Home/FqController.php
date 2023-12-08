<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\FQ;
use Illuminate\Support\Facades\Validator;

class FqController extends Controller
{
    public function Fq()
    {
        $allData = FQ::all();
        return view('backend.main-section.page.home.fq.view',compact('allData'));
    }

    public function FqAdd()
    {
        $data ['fq'] = Fq::all();
        return view('backend.main-section.page.home.fq.add',$data);
    }

    public function FqStore(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'question',
        'ans' => 'required',
    ]);

    $questions = $request->input('question');
    $answers = $request->input('ans');
    
    if (!is_null($questions) && is_array($questions) && !is_null($answers) && is_array($answers)) {
        foreach ($questions as $index => $question) {
            $data = new FQ();
            $data->question = $question;
            $data->ans = $answers[$index];
            $data->save();
        }
    }
    
    return redirect()->route('fq.view');
}
    

    public function FqEdit($id)
    {
        $editData = FQ::find($id);
        return view('backend.main-section.page.home.fq.edit',compact('editData'));
    }

    public function FqUpdate(Request $request,$id)
    {
        $data = FQ::find($id);
        $data->question = $request->question;
        $data->ans = $request->ans;
       
        $data->save();
        $notification = array(
            'message' => 'FQ Update Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('fq.view')->with($notification);
    }

    public function FqStatus($id)
    {
        $getStatus = FQ::select('status')->where('id',$id)->first();
        if ($getStatus -> status ==1)
        {
            $status = 0;
        }else{
            $status = 1;
        }
        FQ::where('id',$id)->update(['status' => $status]);
        return redirect()->back();
    }

    public function fetchuser()
    {
        $all = FQ::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = FQ::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'FQ Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No FQ Found.'
            ]);
        }
    }
}
