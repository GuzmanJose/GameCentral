<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class MyWelcome extends Controller
{
    public function welcome() {
    	$users = User::all();

       return view('welcome', compact('users'));
    }
}
