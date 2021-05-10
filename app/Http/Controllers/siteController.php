<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function index(){
    	 return view('site.index');
    }

    function profile(){
	    	if(auth()->check()){
	    	$user = auth()->user();
	    	return view('site.profile')->with('user' , $user);
    		}	
			return Redirect(route('login'))->withErrors(['You have to login first']);
    }
}
