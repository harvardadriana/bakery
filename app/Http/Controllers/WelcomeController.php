<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * bakery/login/
     */
    public function login(Request $request) {
        // check url path
        $path = $request->path();

        return view('users.login')->with([
            'path' => $path,
        ]); 
    }


	/*
     * bakery/contact
     */
    public function contact(Request $request){
        // check url path
        $path = $request->path();

    	return view('contact')->with([ 
    		'path' => $path,
    	]);
	}


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
