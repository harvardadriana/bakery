<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class ShopController extends Controller
{

    /**
     * bakery/menu/others
     */
    public function others(Request $request) {

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'others')->get();

        return view('shop.others')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu/snacks
     */
    public function snacks(Request $request) {

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'snacks')->get();

        return view('shop.snacks')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu/sweets - GET
     */
    public function order(Request $request) {

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'sweets')->get();

        return view('shop.sweets')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu/sweets  - POST
     */
    public function saveOrder(Request $request) {

        $requestArray = $request->toArray();
        // remove first element of the array: _token
        $requestArray = array_except($requestArray, ['_token']);

        if(count($requestArray) != 0) {

            // convert Array to String to save in DB
            $requestArray = json_encode($requestArray);

            $order = new Order();
            $order->orders = $requestArray;

            dump($order);

            $order->save();
            echo 'order saved';

        }
        else {
            return redirect ('/menu/sweets');
        }
    }

    /**
     * menu data
     */
    public function __invoke() {

    }

}
