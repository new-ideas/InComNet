<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->boolean('status')->default(0)->comment('0=in-active, 1=Active, -1=Suspended'); // 1 is for active , 0 is for suspended
            $table->dateTime('last_login')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->tinyInteger('phone_verified')->default(0);
            $table->tinyInteger('email_verified')->default(0);
            $table->tinyInteger('document_verified')->default(0);
            $table->tinyInteger('email_verify_token')->default(0);
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
