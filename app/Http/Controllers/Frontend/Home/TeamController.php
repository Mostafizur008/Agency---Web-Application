<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Team;
use App\Models\Category\Category;

class TeamController extends Controller
{
    public function Team()
    {
        $categories = Category::all();
        $allData = Team::all();
        return view('frontend.pagelayer.home.team',compact('allData','categories'));
    }

    public function TeamC($id)
    {
        $categories = Category::all();
        $teamMember = Team::find($id);
    
        if (!$teamMember) {
            return redirect()->route('error.page');
        }
    
        return view('frontend.pagelayer.home.team_detail', compact('teamMember','categories'));
    }
    
    
}
