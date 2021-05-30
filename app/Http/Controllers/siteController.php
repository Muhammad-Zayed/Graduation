<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
    	 return view('site.index');
    }

    public function profile(){
	    	if(auth()->check()){
	    	$user = auth()->user();
	    	return view('site.profile')->with('user' , $user);
    		}	
			return Redirect(route('login'))->withErrors(['You have to login first']);
    }

    public function meeting($id)
    {

            $host = 10 * $id +((auth()->user()->id == $id) ?1:0);
            return Redirect('https://192.168.5.57:3030/'.$host);
    }

        public function findUser($id)
    {
             $user = User::findOrfail($id);
            return $user;
    }
}

