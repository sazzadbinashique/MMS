<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteBazarDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('Bazar_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('Menu_id')->unsigned();
            $table->integer('Amount');
            $table->dateTime('Date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Bazar_details');
    }
}
