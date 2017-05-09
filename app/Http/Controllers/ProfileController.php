<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Session;

class ProfileController extends Controller
{

    public function editProfile(Request $request) {
        
        // get user id
        $userId = Auth::id();

        if(!Auth::check()) {
            Session::flash('message', 'You need to login to update your profile.');
            return redirect('/login');
        }

        // get user information
        $user = User::find($userId);

        return view('profile.edit')->with([
        	'path' => 'profile',
        	'user' => $user,
        ]);

    }

    public function saveProfile(Request $request) {

    	// validate input from user
        $this->validate($request, [
            'name' => 'required|alpha|max:255',
            'street' => 'required|min:1',
            'state' => 'required|alpha',
            'zip' => 'required|numeric|digits:5',
        ]);

		$user = User::find($request->id);

		// get new inputs from user
		$user->name = $request->name;
		$user->street = $request->street;
		$user->state = $request->state;
		$user->zip = $request->zip;
		$user->subscribe = $request->subscribe;

		// save in the dB
		$user->save();

        //Session::flash('message', 'Your profile has been updated.');

        return redirect('/profile/edit/'.$request->id); 
    }

   	public function showProfile($id) {

        return view('profile.edit');
    }

}
