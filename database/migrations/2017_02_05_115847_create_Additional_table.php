<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalTable extends Migration
{
    public function up()
    {
        Schema::create('Additional', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('extra_item_id')->unsigned();
             $table->dateTime('date');
            $table->string('extra_amount');
            $table->string('total'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Additional');
    }
}
