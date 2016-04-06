<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\User;
use Auth;


class AllusersController extends Controller
{
    //

    public function index ()
    {
        $users = User::all();
    	return view('allUsers.allUsers', compact('users'));
    }

    public function show ($user)
    {       
         $mainUser = User::find($user);
        // $users = User::with(array('comments'=>function($query){
        //         $query->where('location', '=', $user);
        // }))
        // ->get();
        //  return $users;
        
         $comments = Comment::where('location', '=', $user)->latest()->get();  
  
          
          return view('allUsers.userComments', compact('comments'), compact('mainUser'));    			
    }

   
    public function postUserComments(Request $request, $user)
    {
        $comments = new Comment($request->all());
        $comments->location = $user;
        Auth::user()->comments()->save($comments);

        return back();

    }

    


}
