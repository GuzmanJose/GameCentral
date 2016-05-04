<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Game;

class AllGamesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    
     public function showAvatar()
    {   
       $user = Auth::user();
       $games = Game::all();
       $avatars = Auth::user()->avatars()->get();
       return view('gamesAndIssues.allGames', compact('avatars', 'games', 'user'));
    
    }

    public function indexUploadGame()
    {
    	return view('gamesAndIssues.uploadGame');
    }
}
