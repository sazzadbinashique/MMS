<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraItemTable extends Migration
{
    public function up()
    {
        Schema::create('Extra_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('extra_item');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Extra_item');
    }
}
