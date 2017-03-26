<?php




/**
 * Practice - log viewer
 */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


/**
 * bakery/
 */
Route::get('/', 'WelcomeController');