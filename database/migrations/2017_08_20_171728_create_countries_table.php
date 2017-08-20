<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Create table for storing roles
        Schema::create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code')->nullable();
            $table->string('country_name')->nullable()->index();
            $table->string('dial_code')->nullable();
            $table->timestamps();

        });
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::drop('country');
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
