<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{

	    $user = \App\User::firstOrCreate([
	        'email' => 'jill@harvard.edu',
	        'name' => 'Jill TestUser',
	        'password' => \Hash::make('helloworld'),
	        'street' => 'Oxford street 23',
            'state_id' => 21,
            'zip' => '02114',
            'subscribe' => 'yes',

	    ]);

	    $user = \App\User::firstOrCreate([
	        'email' => 'jamal@harvard.edu',
	        'name' => 'Jamal TestUser',
	        'password' => \Hash::make('helloworld'),
	        'street' => 'Brattle street 51',
            'state_id' => 21,
            'zip' => '02138',
            'subscribe' => 'no',
	    ]);
	    
	}
}