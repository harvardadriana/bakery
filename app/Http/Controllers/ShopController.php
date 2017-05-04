<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\User;
use App\OrderProductTableSeeder;
use Session;

class ShopController extends Controller
{

    /**
     * bakery/orders/   - GET
     */
    public function viewAllOrders() {

        // TODO ...

        return view('orders.viewall')->with([
            'path' => 'orders',
        ]);
    }


    /**
     * bakery/orders/{id}   - GET
     */
    public function viewOrder($id) {

        // find order that matches id
        $order = Order::with('products')->find($id);

        if(!$order) {
            Session::flash('message', 'No order found.');
            return redirect('/orders');
        }

        $productsArray = [];
        $totalPrice = 0;

        foreach($order->products as $product) {

            // get each product related to this order
            $productsArray[] = $product;

            // calculate total price
            $totalPrice += $product->price;
        }
       
        return view('orders.view')->with([
            'path' => 'orders',
            'id' => $id,
            'productsArray' => $productsArray,
            'totalPrice' => $totalPrice,
        ]);
    }


    /**
     * bakery/orders/delete/{id}   - GET
     */
    public function delete($id) {

        // find order that matches id
        $order = Order::with('products')->find($id);

        if(!$order) {
            Session::flash('message', 'No order found.');
            return redirect('/orders');
        }

        $productsArray = [];
        $totalPrice = 0;

        foreach($order->products as $product) {

            // get each product related to this order
            $productsArray[] = $product;

            // calculate total price
            $totalPrice += $product->price;
        }
       
        return view('orders.delete')->with([
            'path' => 'orders',
            'id' => $id,
            'productsArray' => $productsArray,
            'totalPrice' => $totalPrice,
        ]);

    }


    /**
     * bakery/orders/delete/   - POST
     */
    public function deleteOrder(Request $request) {

        // find order that matches id
        $order = Order::find($request->id);

        if(!$order) {
            Session::flash('message', 'Order could not be found.');
            return redirect('/orders');
        }
        
        $order->products()->detach();
        $order->delete();

        Session::flash('message', 'Your order has been deleted');

        return redirect('/orders');

    }


    /**
     * bakery/menu/sweets/ - GET
     */
    public function showMenu(Request $request) {
        
        // returns all products in that category to populate the menu
        $menu = Product::where('category', 'LIKE', 'sweets')->get();

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

            // check if user is logged
            $user = $request->user();

            if(!$user) {
                Session::flash('message', 'You need to login to place an order.');
                return redirect('/menu/sweets');
            }

            // create new order
            $order = new Order();
            $order->user_id = $request->user()->id;
            $order->save();

            // get the selected products from user
            $selectedProducts = $request->order;

            foreach($selectedProducts as $product_id) {

                $product = Product::where('id', 'LIKE', $product_id)->first();
                $order->products()->save($product);

            }

            Session::flash('message', 'Your order has been placed.');

            return redirect ('/orders/'.$order->id);

        }
        else {

            return redirect ('/menu/sweets');

        }
    }
















    /**
     * bakery/menu/others
     */
    public function others(Request $request) {

        // returns all products in that category to populate the menu
        $menu = Product::where('category', 'LIKE', 'others')->get();

        return view('menu.others')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }


    /**
     * bakery/menu/snacks
     */
    public function snacks(Request $request) {

        // returns all products in that category to populate the menu
        $menu = Product::where('category', 'LIKE', 'snacks')->get();

        return view('menu.snacks')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }
}
