<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\User;
use Session;

class ShopController extends Controller
{

    /**
     * bakery/orders/{id}   - GET
     */
    public function viewOrder($id) {

        // find order that matches id
        $orderId = Order::find($id);
   
        if(!$orderId) {
            Session::flash('message', 'No order found.');
            return redirect('/orders');
        }

        // get orders and convert string to array
        $arrayOrderList = json_decode($orderId->orders);

        // match items in Order List to find equivalent Products
        foreach($arrayOrderList as $key=>$products_id) {

            // save products found in array
            $arrayProductsList[$key] = Product::where('product_id', '=', $products_id)->get();
        }

        // calculate total price
        $totalPrice = 0;
        foreach($arrayProductsList as $products=>$product) {
            foreach($product as $p) {

                $price = $p->price;
                $totalPrice += $price;

            }
        }
       
        return view('orders.vieworder')->with([
            'path' => '',
            'id' => $id,
            'arrayProductsList' => $arrayProductsList,
            'totalPrice' => $totalPrice,
        ]);
    }


    /**
     * bakery/orders/   - GET
     */
    public function viewAllOrders() {

        //$order = Order::find($id);

        return view('orders.viewallorders')->with([
            'path' => 'orders',
        ]);
    }


    /**
     * bakery/menu/sweets/ - GET
     */
    public function displayMenuSweets(Request $request) {
        
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

            $user = $request->user();

            if(!$user) {
                Session::flash('message', 'You need to login to place an order.');
                return redirect('/menu/sweets');
            }

            // create new order
            $order = new Order();

            // convert Array to String for saving in DB
            // save the selected products in the new order
            $order->orders = json_encode($request->order);
            $user = $request->user();
            $order->user_id = $user->id;

            // save new order in DB
            $order->save();

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

        // returns all products in the menu
        $product = new Product();
        $menu = $product->where('category', 'LIKE', 'others')->get();

        return view('menu.others')->with([
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

        return view('menu.snacks')->with([
            'path' => 'menu',
            'menu' => $menu,
        ]);
    }
}
