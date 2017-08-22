<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociallinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sociallinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsign()->index();
            $table->string('name');
            $table->string('icon');
            $table->tinyInteger('status')->default(0)->comment('0=inactive , 1=active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sociallinks');
    }
}
