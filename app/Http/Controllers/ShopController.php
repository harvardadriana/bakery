<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{

    /**
     * menu data
     */
    public function __invoke() {

    }


	/**
	 * bakery/shop/
	 */
    public function index(Request $request) {

        // open menu file
        $menuJson = file_get_contents(database_path().'/menu.json');
        // convert json data into array
        $menu = json_decode($menuJson, true); 


        // RETRIEVE INPUTS
        $categoryChoice = $request->input('category', null);
        $apply = $request->input('apply', null);
        // check mnavigation menu
        $path = $request->path();

        if(isset($apply)) { 

dump("loop-controller");
            // returns cakes selection
           // foreach($menu as $category => $product) {

                //if($categoryChoice != $category) {

                    //unset($menu[$category]);

                //}

           // }

            //dump($menu);


        } 


        //  
    	return view('shop')->with([
            'path' => $path,
            'category' => $categoryChoice,
            'menu' => $menu,
        ]);

    }

    
    /**
	 * bakery/shop/
	 */
    public function selection() {
    	return view('shop'); 	
    }


    /**
     * bakery/menu
     */
    public function menu(Request $request) {
        // check mnavigation menu
        $path = $request->path();

        dump($path);
        return view('shop.menu')->with([
            'path' => 'menu',
        ]);      
    }

}
