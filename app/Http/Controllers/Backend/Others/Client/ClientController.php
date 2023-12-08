<?php

namespace App\Http\Controllers\Backend\Others\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Info\Info;
use Illuminate\Support\Facades\Validator;
use PDF;

class ClientController extends Controller
{
    public function ClView()
    {
        $data ['allData'] = Info::all();
        return view('backend.main-section.page.others.client_request',$data);
    }

    public function ClDetail($id)
    {
        $data ['detail'] = Info::find($id);
        $pdf = PDF::loadView('backend.main-section.page.others.detail', $data);
        return  $pdf->stream('complain.pdf');
    }

    public function fetchuser()
    {
        $all = Info::all();
        return response()->json([
            'users'=>$all,
        ]);
    }

    public function destroy($id)
    {
        $all = Info::find($id);
        if($all)
        {
            $all->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Student Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }
    }
}
