<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Live\Channel;
use App\Models\Others\Info\Info;
use App\Models\Home\Service;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $count = User::count();
        $ser = Service::count();
        $complain = Info::latest()->limit(10)->count();
        $users = User::all();
        $latest = User::latest()->limit(4)->get();
        return view('backend.main-section.body.index',compact('ser', 'count','users','latest','complain'));
    }
}
