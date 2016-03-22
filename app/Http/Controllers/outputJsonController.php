<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class outputJsonController extends Controller
{
    public function outPut()				
    {    
    	$users = User::all();

    	return response()->json($users);
    }
}
