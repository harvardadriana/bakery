<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndStates extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign('users_state_id_foreign');

            $table->dropColumn('state_id');
        });
    }

}
