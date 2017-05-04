<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\User;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Order::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'orders' => '["4","9"]',
            'user_id' => '1',
        ]);

        Order::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'orders' => '["2","4","6"]',
            'user_id' => '1',
        ]);

        Order::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'orders' => '["8"]',
            'user_id' => '1',
        ]);

    }
}
