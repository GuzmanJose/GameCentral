<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Game;
use Auth;

class gameController extends Controller
{
    //

	public function __construct()
	{
		$this->middleware('auth');
	}


    public function storeGame(Request $request)
    {	
        $user = Auth::user();
        $avatar = $user->avatars()->first();

        $profilePic = $avatar->profilePicture;
        $name = $user->name;

    	$id = $request->id;
    	$gameFile = $request->file('zipGame');
    	$gameName = time() . $gameFile->getClientOriginalName();
		$gameFile->move('img/games', $gameName);

		$thumbnailFile = $request->file('thumbnail');
		$thumbnailName = time() . $thumbnailFile->getClientOriginalName();
		$thumbnailFile->move('img/gameImages', $thumbnailName);

    	$games = new Game($request->all());
    	$games->zipGame = "img/games/{$gameName}";
    	$games->thumbnail = "img/gameImages/{$thumbnailName}";
        $games->user_name = $name;
        $games->photo = $profilePic;
    	Auth::user()->games()->save($games);

    	return view('gamesAndIssues.game', compact('games'));

    }

    	public function showGame($id)
    	{
    		$games = Auth::user()->games()->find($id);
    		return view('gamesAndIssues.game', compact('games'));

    	}

}
