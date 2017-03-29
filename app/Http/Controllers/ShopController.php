<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{

    public $menu;

    /**
     * menu data
     */
    public function __invoke() {

  
    }


	/**
	 * bakery/shop/
	 */
    public function index() {

                // open menu file
        $menuJson = file_get_contents(database_path().'/menu.json');

        // convert json data into array
        $menu = json_decode($menuJson, true); 


    	return view('shop');  	
    }

    
    /**
	 * bakery/shop/
	 */
    public function selection() {
    	return view('shop');    	
    }


    /**
     * bakery/shop/order
     */
    public function order() {
        return view('shop.order');      
    }

}
