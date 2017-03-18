<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthTable extends Migration
{
    public function up()
    {
        Schema::create('Month', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Month');
            $table->integer('Year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Month');
    }
}
