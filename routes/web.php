<?php

/**
 * Practice - log viewer
 */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}



/**
 * bakery/shop/order/
 */
Route::get('/shop/orders', 'ShopController@order');


/**
 * bakery/shop/
 */
Route::get('/shop', 'ShopController@index');


/**
 * bakery/
 */
Route::get('/', 'WelcomeController');