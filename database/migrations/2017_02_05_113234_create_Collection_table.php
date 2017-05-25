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
            $table->timestamps();
        });
    }
	
    public function down()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('Collection');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
