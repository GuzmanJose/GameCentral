<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Avatar;
use Auth;
class AvatarController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function createAvatar(Request $request)
    {   
        $avatars = new Avatar($request->all());
        Auth::user()->avatars()->save($avatars);
    	
        
    	return redirect('home');
    }
    

    public function showAvatar()
    {   

       $avatars = Auth::user()->avatars()->get();
       return view('home', compact('avatars'));
    
    }


    public function myAvatar () {

    	return view('avatar.avatar');
    }
}
