<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GrahamCampbell\Markdown\Facades\Markdown;
use App\Issue;
use App\Comment;
use Auth;


class issueController extends Controller
{
    //

    	public function __construct()
	{
		$this->middleware('auth');
	}


    public function storeIssue(Request $request)
    {   
        $user = Auth::user();
        $avatar = $user->avatars()->first();  // use this to grab other tables!!!
        $profilePic = $avatar->profilePicture;
        $name = Auth::user()->name;

        $issues = new Issue($request->all());
        $issues->user_name = $name;
        $issues->website = $request->website;
        $issues->photo = $profilePic;
    	Auth::user()->issues()->save($issues);

         $comments = Comment::where('issueLocation', '=', 0)->get();

    	return view('gamesAndIssues.issue', compact('issues', 'comments'));
    }

    public function showIssue($id)
    {       
            $issues = Issue::all()->find($id);
            $comments = Comment::where('issueLocation', '=', $id)->get();        

            return view('gamesAndIssues.issue', compact('issues', 'comments'));
    }

        public function postUserCommentsIssues(Request $request, $id)
    {   
        $user = Auth::user();
        $avatar = $user->avatars()->first();
        $photo = $avatar->profilePicture;
        $name = $user->name;

        $comments = new Comment($request->all());
        $comments->photo = $photo;
        $comments->user_name = $name;
        $comments->issueLocation = $id;
        Auth::user()->comments()->save($comments);

        return back();

    }



}
