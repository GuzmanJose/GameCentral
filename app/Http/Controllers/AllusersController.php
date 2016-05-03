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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $users = User::all();
    	return view('allUsers.allUsers', compact('users'));
    }


    public function show ($id)
    {       
         $mainUser = User::find($id);
         // $users = User::with(array('comments'=>function($query) {
         //        $query->where('location', '=', '$mainUser->id');
         // }))
         // ->get();
        
        // $users = Comment::with('user')->get();
        // return $users;
       
         $comments = Comment::where('location', '=', $id)->latest()->get();


         $avatar = $mainUser->avatars()->get();

         return view('allUsers.userComments', compact('comments', 'mainUser', 'avatar'));    			
    }
   
    public function postUserComments(Request $request, $id)
    {   
        $user = Auth::user();
        $avatar = $user->avatars()->first();
        $photo = $avatar->profilePicture;
        $name = $user->name;

        $comments = new Comment($request->all());
        $comments->photo = $photo;
        $comments->user_name = $name;
        $comments->location = $id;
        Auth::user()->comments()->save($comments);

        return back();

    }

    


}
