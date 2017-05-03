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

        // find order that matches id
        $orderId = Order::find($id);
   
        if(!$orderId) {
            Session::flash('message', 'No order found.');
            return redirect('/');
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
       
        return view('orders.view')->with([
            'path' => '',
            'id' => $id,
            'arrayProductsList' => $arrayProductsList,
            'totalPrice' => $totalPrice,
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
