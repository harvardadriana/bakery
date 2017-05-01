<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    /**
     * bakery/register/  -  GET
     */
    public function register(Request $request) {

        // check url path
        $path = $request->path();

        return view('users.register')->with([
            'path' => $path,
        ]); 

    }


    /**
     * bakery/register/  -  POST
     */
    public function addUser(Request $request) {

        // RETRIEVE INPUTS
        $name = $request->input('name', null);
        $email = $request->input('email', null);
        $password = $request->input('password', null);
        $passwordConfirm = $request->input('passwordConfirm', null);
        $address = $request->input('address', null);
        $register = $request->input('register', null);

        if(isset($register)) {

            // VALIDATE USER INPUT AND CONFIRM PASSWORDS
            $this->validate($request, [
                'name' => 'required|alpha|max:80',
                'email' => 'required|email',
                'password' => 'required|alpha_num|min:4',
                'passwordConfirm' => 'required|alpha_num|min:4',
                'address' => 'required',
            ]) && ($password == $passwordConfirm);

            // add new user 
            # $user = new User();
            # $user->name = $request->name;
            # $user->email = $request->email;
            # $user->password = $request->password;
            # $user->passwordConfirm = $request->passwordConfirm;
            # $user->address = $request->address;
            # $user->save();
            
        }

        return redirect('/login/')->with([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'passwordConfirm' => $passwordConfirm,
            'address' => $address,
        ]);

    }


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
    public function welcome(){
    	return view('welcome')->with([ 
    		'path' => 'home',
    	]);
	}

}
