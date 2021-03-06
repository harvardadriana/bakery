<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

	/*
     * bakery/stores
     */
    public function stores(Request $request){
        // check url path
        $path = $request->path();

    	return view('stores')->with([ 
    		'path' => $path,
    	]);
	}

    /*
     * bakery/
     */
    public function index(){
    	return view('welcome')->with([ 
    		'path' => 'home',
    	]);
	}

}
