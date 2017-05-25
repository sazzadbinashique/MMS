<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBazar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Bazar', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('Month_id')->references('id')->on('Month');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Bazar', function (Blueprint $table) {
            //
        });
    }
}
