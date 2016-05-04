<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\Issue;
use App\Comment;
use App\Avatar;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::orderBy('id', 'desc')->get();
        $comments = Comment::orderBy('id', 'desc')->get();
        $games = User::with('games')->latest()->get();
        $issues = User::with('issues')->latest()->get();

        $avatars = Auth::user()->avatars()->get();

        
       return view('home', compact('users', 'comments', 'games', 'issues', 'avatars'));
    }

   
}
