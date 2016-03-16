<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    

    public function index()
    {   
        
    	return view('commentsFolder.comments');
    }

    public function publish(Request $request)			
    {
    	$comments = new Comment($request->all());
    	Auth::user()->comments()->save($comments);

    	return back();
    }

    public function showComments()
    {
        $comments = Comment::latest()->get();
        
        return view('commentsFolder.comments', compact('comments'));
    }
        
    
}
