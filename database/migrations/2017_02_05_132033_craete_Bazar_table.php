<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteBazarTable extends Migration
{
    public function up()
    {
        Schema::create('Bazar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('Month_id')->unsigned();
            $table->dateTime('Expected_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Bazar');
    }
}
