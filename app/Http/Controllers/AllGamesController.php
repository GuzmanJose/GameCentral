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
        
       $games = Game::all();
       $avatars = Auth::user()->avatars()->get();
       return view('gamesAndIssues.allGames', compact('avatars', 'games'));
    
    }

    public function indexUploadGame()
    {
    	return view('gamesAndIssues.uploadGame');
    }
}
