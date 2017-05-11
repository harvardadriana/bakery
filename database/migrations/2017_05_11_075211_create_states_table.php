<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::drop('states');
    }
}
