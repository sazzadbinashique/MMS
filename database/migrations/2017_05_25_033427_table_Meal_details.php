<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMealDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Meal_details', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('Meal_id')->references('id')->on('Meal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Meal_details', function (Blueprint $table) {
            //
        });
    }
}
