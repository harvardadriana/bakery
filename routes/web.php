<?php


Route::group(['middleware' => 'auth'], function () {

	/**
	 * bakery/orders/
	 */
	Route::get('/orders', 'ShopController@viewAllOrders');
	Route::get('/orders/{id}', 'ShopController@viewOrder');
	Route::get('/orders/delete/{id}', 'ShopController@delete');
	Route::post('/orders/delete', 'ShopController@deleteOrder');

	Route::get('/profile/edit', 'ProfileController@editProfile');
	Route::post('/profile/edit', 'ProfileController@saveProfile');

	Route::get('/profile/view/{id}', 'ProfileController@showProfile');
});



/**
 * bakery/menu/sweets/
 */
Route::get('/menu/sweets', 'ShopController@showMenu');
Route::post('/menu/sweets', 'ShopController@saveOrder');


/**
 * bakery/
 */
Auth::routes();
Route::get('/home', 'WelcomeController@index')->name('home');
Route::get('/', 'WelcomeController@index');













Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user)
        dump('You are logged in.', $user->toArray());
    else
        dump('You are not logged in.');

    return;
});

/**
 * debugging/testing tools - LOCAL ENVIRONMENT ONLY
 */
if(App::environment('local')) {

	/**
	 * /drop
	 */
    Route::get('/drop', function() {

        DB::statement('DROP database bakery');
        DB::statement('CREATE database bakery');

        return 'Dropped bakery; created bakery.';
    });

	/**
	 * /logs - Log viewer
	 */
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

	/**
	 * /debug
	 */
	Route::get('/debug', function() {

		echo '<pre>';

		echo '<h1>Environment</h1>';
		echo App::environment().'</h1>';

		echo '<h1>Debugging?</h1>';
		if(config('app.debug')) echo "Yes"; else echo "No";

		echo '<h1>Database Config</h1>';
	    	echo 'DB defaultStringLength: '.Illuminate\Database\Schema\Builder::$defaultStringLength;

	    // The following commented out line will print your MySQL credentials.
		//print_r(config('database.connections.mysql'));

		echo '<h1>Test Database Connection</h1>';
		try {
			$results = DB::select('SHOW DATABASES;');
			echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
			echo "<br><br>Your Databases:<br><br>";
			print_r($results);
		}
		catch (Exception $e) {
			echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
		}

		echo '</pre>';

	});
};


/**
 * bakery/contact/
 */
Route::get('/contact', 'WelcomeController@contact');


/**
 * bakery/stores/
 */
Route::get('/stores', 'WelcomeController@stores');


/**
 * bakery/menu/others
 */
Route::get('/menu/others', 'ShopController@others');


/**
 * bakery/menu/snacks
 */
Route::get('/menu/snacks', 'ShopController@snacks');

