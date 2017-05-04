<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Order;

class OrderProductTableSeeder extends Seeder
{

    public function run() {

	    $orders =[
	        1 => [ 8 ],
	        2 => [ 3, 6, 7],
	        3 => [ 9, 5, 6, 1],
	    ];

	    foreach($orders as $order_id => $product_id) {

	        $order = Order::where('id', 'like', $order_id)->first();

	        foreach($product_id as $product) {
	            $product = Product::where('id', 'LIKE', $product)->first();
	            $order->products()->save($product);
	        }
	    }
    }
}
