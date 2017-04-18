<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

	/*
     * bakery/contact
     */
    public function contact(){
    	return view('contact')->with([ 
    		'path' => 'contact'
    	]);
	}


	/*
     * bakery/stores
     */
    public function stores(){
    	return view('stores')->with([ 
    		'path' => 'stores'
    	]);
	}


    /*
     * bakery/
     */
    public function welcome(){
    	return view('welcome')->with([ 
    		'path' => 'home'
    	]);
	}

}
