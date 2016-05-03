<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Game;

class myGamesController extends Controller
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
        $games = $user->games()->get();
    	
    	return view('gamesAndIssues.myGames', compact('user', 'avatars', 'games'));
    
    }


}
