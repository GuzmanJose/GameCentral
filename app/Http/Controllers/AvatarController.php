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
           $file = $request->file('profilePicture');

           $name = time() . $file->getClientOriginalName();

           $file->move('profilePics', $name);

          
        $avatars = new Avatar($request->all());
        $avatars->profilePicture = "profilePics/{$name}";
       
        Auth::user()->avatars()->save($avatars);
    	
        
    	return redirect('home');
    }
    

    public function myAvatar () {

    	return view('avatar.avatar');
    }
}
