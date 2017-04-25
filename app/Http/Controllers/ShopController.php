<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{

    /**
     * bakery/menu/others
     */
    public function others(Request $request) {

        // check url path
        $path = $request->path();

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'others')->get();

        return view('shop.others')->with([
            'path' => $path,
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu/snacks
     */
    public function snacks(Request $request) {

        // check url path
        $path = $request->path();

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'snacks')->get();

        return view('shop.snacks')->with([
            'path' => $path,
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu
     */
    public function cakes(Request $request) {

        // check url path
        $path = $request->path();

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'cakes')->get();

        return view('shop.cakes')->with([
            'path' => 'cakes',
            'menu' => $menu,
        ]);
    }


    /**
     * menu data
     */
    public function __invoke() {

    }

}
