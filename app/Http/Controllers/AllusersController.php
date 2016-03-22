<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class AllusersController extends Controller
{
    //

    public function index ()
    {
        $users = User::all();
    	return view('allUsers.allUsers', compact('users'));
    }

    public function show (User $user)
    {
          return view('allUsers.userComments', compact('user'));    			
    }
}
