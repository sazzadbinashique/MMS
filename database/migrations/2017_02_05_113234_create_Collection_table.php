<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionTable extends Migration
{
    public function up()
    {
        Schema::create('Collection', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->string('amount');
             $table->dateTime('date');
             // $table->integer('total');
            $table->timestamps();
        });
    }
	
    public function down()
    {
        Schema::dropIfExists('Collection');
    }
}
