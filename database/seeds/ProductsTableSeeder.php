<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Chocolate cake</p>',
			'description' => '<p>Black Forest: layers of chocolate sponge cake with cherries, whipped cream, and more chocolate</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake1.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake1-small.jpg" alt="Chocolate cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Coconut Cake</p>',
			'description' => '<p>Cake with filling of coconuts and pineapple cream</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake2.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake2-small.jpg" alt="Coconut cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Oreo cake</p>',
			'description' => '<p>Lots of oreo cookies, choc, and cherries</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake3.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake3-small.jpg" alt="Oreo cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Mushroom Cake</p>',
			'description' => '<p>A cake with a bunch of mushrooms</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake4.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake4-small.jpg" alt="Mushroom cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Choc Cherry Delight Cake</p>',
			'description' => '<p>Chocolate and cherries</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake5.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake5-small.jpg" alt="Choc Cherry Delight cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Cherry Chocolate Cake</p>',
			'description' => '<p>Old-fashioned cherry chocolate cake</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake6.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake6-small.jpg" alt="Cherry Chocolate Cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Piece of Heaven Cake</p>',
			'description' => '<p>Our favorite</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake7.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake7-small.jpg" alt="Piece of Heaven Cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Caramel Mud Cake</p>',
			'description' => '<p>Delicious caramel cake with some toppings on it!</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake8.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake8-small.jpg" alt="Caramel Mud Cake" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'sweets',
			'product_name' => '<p>Another Chocolate Cake</p>',
			'description' => '<p>Pure and simple chocolate cake</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/sweets/cakes/cake9.jpg"',
            'image' => '<img src="/images/sweets/cakes/thumb/cake9-small.jpg" alt="Another Chocolate Cake" />',
        ]);

        Product::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category' => 'snacks',
            'product_name' => '<p>Ciabatta</p>',
            'description' => '<p>Layers of tomato, cheese, onion and bacon</p>',
            'price' => 9.99,
            'quantity' => 10,
            'link' => '"/images/snacks/ciabatta.jpg"',
            'image' => '<img src="/images/snacks/thumb/ciabatta.png" alt="Ciabatta" />',
        ]);

        Product::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category' => 'snacks',
            'product_name' => '<p>Tuna Melt</p>',
            'description' => '<p>Tuna sandwich with the finest melted cheese</p>',
            'price' => 9.99,
            'quantity' => 10,
            'link' => '"/images/snacks/tuna-melt.jpg"',
            'image' => '<img src="/images/snacks/thumb/tuna-melt.png" alt="Tuna Melt" />',
        ]);

        Product::insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'category' => 'snacks',
			'product_name' => '<p>Chicken Wrap</p>',
			'description' => '<p>Sliced grilled chicken with avocado and cheese</p>',
            'price' => 9.99,
			'quantity' => 10,
            'link' => '"/images/snacks/chickenwrap.jpg"',
            'image' => '<img src="/images/snacks/thumb/chickenwrap.png" alt="Chicken Wrap" />',
        ]);

        Product::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category' => 'others',
            'product_name' => '<p>Breads</p>',
            'description' => '<p>Variety of breads</p>',
            'price' => 9.99,
            'quantity' => 10,
            'link' => '"/images/others/breads.jpg"',
            'image' => '<img src="/images/others/thumb/breads.png" alt="Breads" />',
        ]);

        Product::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category' => 'others',
            'product_name' => '<p>Pizza Margherita</p>',
            'description' => '<p>Tomato sauce, mozzarella cheese and fresh basil</p>',
            'price' => 9.99,
            'quantity' => 10,
            'link' => '"/images/others/pizza.jpg"',
            'image' => '<img src="/images/others/thumb/pizza.png" alt="Pizza Margherita" />',
        ]);

        Product::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'category' => 'others',
            'product_name' => '<p>Pizza Pepperoni</p>',
            'description' => '<p>Pepperoni sausage and mozzarella cheese</p>',
            'price' => 9.99,
            'quantity' => 10,
            'link' => '"/images/others/pizza2.jpg"',
            'image' => '<img src="/images/others/thumb/pizza2.png" alt="Pizza Pepperoni" />',
        ]);

    }
}