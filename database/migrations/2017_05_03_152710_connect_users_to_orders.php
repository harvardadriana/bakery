<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {

            // add foreign key 'user_id' to Orders table
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign('orders_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
