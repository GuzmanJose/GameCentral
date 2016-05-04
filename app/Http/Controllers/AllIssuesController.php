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
       $user = Auth::user();
       $issues = Issue::all(); 
       $avatars = Auth::user()->avatars()->get();
       
       return view('gamesAndIssues.allIssues', compact('avatars', 'issues', 'user'));
    
    }

    public function indexUploadIssue()
    {
    	return view('gamesAndIssues.uploadIssue');
    }
}
