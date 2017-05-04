<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{

    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();

            // foreign keys
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');

        });
    }

    public function down()
    {
        Schema::drop('order_product');
    }
}
