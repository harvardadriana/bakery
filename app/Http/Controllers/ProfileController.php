<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\State;
use Session;

class ProfileController extends Controller
{

    /**
     * bakery/profile/edit   - GET
     */
    public function editProfile(Request $request) {
        
        // get user id
        $userId = Auth::id();

        // check if user is logged in
        if(!Auth::check()) {
            Session::flash('message', 'You need to login to update your profile.');
            return redirect('/login');
        }

        // retrieve user information
        $user = User::find($userId);

        // retrieve all states
        $statesForDropdown = State::getStatesForDropdown();

        return view('profile.edit')->with([
        	'path' => 'profile',
        	'user' => $user,
            'statesForDropdown' => $statesForDropdown,
        ]);

    }

    /**
     * bakery/profile/edit   - POST
     */
    public function saveProfile(Request $request) {

    	// validate input from user
        $this->validate($request, [
            'name' => 'required|max:255',
            'street' => 'required|min:1',
            'state_id' => 'required',
            'zip' => 'required|numeric|digits:5',
        ]);

		$user = User::find($request->id);

		// get new inputs from user
		$user->name = $request->name;
		$user->street = $request->street;
		$user->zip = $request->zip;
		$user->subscribe = $request->subscribe;
        $user->state_id = $request->state_id;

		// save in the dB
		$user->save();

        Session::flash('message', 'Your profile has been updated.');
        return redirect('/profile/view/'.$request->id); 
    }

    /**
     * bakery/profile/view/{id}
     */
   	public function showProfile($id) {

        // check if user is logged in
        if(!Auth::check()) {
            Session::flash('message', 'You need to login to view your profile.');
            return redirect('/login');
        }

        // get user information
        $user = User::find($id);
        $state_name = State::find($user->state_id)->pluck('name')->first();

        return view('profile.view')->with([
            'path' => 'profile',
            'user' => $user,
            'state_name' => $state_name,
        ]);

    }

}