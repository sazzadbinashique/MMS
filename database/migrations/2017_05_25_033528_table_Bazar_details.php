<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBazarDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Bazar_details', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('Menu_id')->references('id')->on('Menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Bazar_details', function (Blueprint $table) {
            //
        });
    }
}
