<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    public function up()
    {
        Schema::create('Menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_item');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Menu');
    }
}
