<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Issue;
use Auth;

class AllIssuesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function showAvatar()
    {   
       $issues = Issue::all(); 

       $avatars = Auth::user()->avatars()->get();
       return view('gamesAndIssues.allIssues', compact('avatars', 'issues'));
    
    }

    public function indexUploadIssue()
    {
    	return view('gamesAndIssues.uploadIssue');
    }
}
