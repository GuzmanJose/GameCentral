<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GrahamCampbell\Markdown\Facades\Markdown;
use App\Http\Requests;
use App\Game;
use App\Comment;
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
        $games->gameWebsite = $request->gameWebsite;
        $games->photo = $profilePic;
    	Auth::user()->games()->save($games);

        $comments = Comment::where('gameLocation', '=', 0)->get();

    	return view('gamesAndIssues.game', compact('games', 'comments'));

    }

    	public function showGame($id)
    	{
    		$games = Game::all()->find($id);
            $comments = Comment::where('gameLocation', '=', $id)->get();

    		return view('gamesAndIssues.game', compact('games', 'comments'));

    	}

        public function postUserCommentsGames(Request $request, $id)
        {   
            $user = Auth::user();
            $avatar = $user->avatars()->first();
            $photo = $avatar->profilePicture;
            $name = $user->name;

            $comments = new Comment($request->all());
            $comments->photo = $photo;
            $comments->user_name = $name;
            $comments->gameLocation = $id;
            Auth::user()->comments()->save($comments);

            return back();

        }

}
