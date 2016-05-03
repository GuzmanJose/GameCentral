<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
Use App\Issue;

class myIssuesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{	
		$user = Auth::user();
		$avatars = $user->avatars()->get();
		$issues = $user->issues()->get();
		return view('gamesAndIssues.myIssues', compact('user', 'avatars', 'issues'));
	}

}
