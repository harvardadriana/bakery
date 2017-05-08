<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\User;
use Session;

class ShopController extends Controller
{

    /**
     * bakery/orders/   - GET
     */
    public function viewAllOrders(Request $request) {

        // get user id
        $user_id = Auth::id();

        if(!Auth::check()) {

            Session::flash('message', 'You need to login to see your orders.');
            return redirect('/login');

        }

        // get orders related to this user
        $orders_list_db = Order::where('user_id', '=', $user_id)->with('products')->get()->toArray();

        if($orders_list_db) {

            $ordersList = [];

            // get each product in user's orders list
            foreach($orders_list_db as $list) {

                $ordersList[] = $list['products'];

            }

        }
        else {

            $ordersList = [];
            
        }

        // get user name
        $user_name = Auth::user()->name;

        return view('orders.viewall')->with([

            'path' => 'orders',
            'ordersList' => $ordersList,
            'user_name' => $user_name,

        ]);
    }


    /**
     * bakery/orders/{id}   - GET
     */
    public function viewOrder($id) {

        // find order that matches id
        $order = Order::with('products')->with('user')->find($id);

        if(!$order) {

            Session::flash('message', 'No order found.');
            return redirect('/orders');

        }

        // get user's name
        $userName = $order->user->name;

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
            'userName' => $userName,

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

            Session::flash('message', 'No order found.');
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

            // check if user is logged in
            if(!Auth::user()) {

                Session::flash('message', 'You need to login to place an order.');
                return redirect('/menu/sweets');

            }

            // create new order
            $order = new Order();

            // associate order with user
            $order->user()->associate($request->user()->id);
            $order->save();

            // get the selected products from user
            foreach($request->order as $productId) {

                $product = Product::where('id', 'LIKE', $productId)->first();
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
