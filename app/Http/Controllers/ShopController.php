<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Session;

class ShopController extends Controller
{

    /**
     * bakery/menu/sweets/ - GET
     */
    public function displayMenu(Request $request) {
        
        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'sweets')->get();

        return view('menu.sweets')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu/sweets/  - POST
     */
    public function saveOrder(Request $request) {

        if(count($request->order) != 0) {

            // convert Array to String for saving in DB
            $requestArray = json_encode($request->order);

            // create new order
            $order = new Order();
            $order->orders = $requestArray;

            // save new order in DB
            $order->save();

            Session::flash('message', 'Your order has been placed.');

            return redirect ('/orders/'.$order->id)->with([
                'order' => $order,
            ]);

        }
        else {

            return redirect ('/menu/sweets');

        }
    }

    /**
     * bakery/orders/{id?}
     */
    public function viewOrder($id) {

        // find order
        $order = Order::find($id);
   
        if(!$order) {
            Session::flash('message', 'No order found.');
            return redirect('/');
        }

        // convert string to array
        $orders = json_decode($order->orders);

        foreach($orders as $key=>$order) {

            $products[$key] = Product::where('product_id', '=', $order)->get();

        }

        dump($products);
       
        return view('orders.view')->with([
            'path' => '',
            'id' => $id,
            'products' => $products,
        ]);
    }


    /**
     * bakery/orders/
     */
    public function viewAllOrder() {

        //$order = Order::find($id);

        return view('orders.view')->with([
            'path' => '',
        ]);
    }


    /**
     * menu data
     */
    public function __invoke() {

    }

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
}
