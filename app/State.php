<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public function users() {

        return $this->hasMany('App\User');
        
    }

	public static function getStatesForDropdown() {

	    // retrieve all states
        $states = State::all()->toArray();

        $statesForDropdown = [];

        foreach($states as $state) {

            $statesForDropdown[$state['id']] = $state['name'];

        }

        return $statesForDropdown;

    }

}
