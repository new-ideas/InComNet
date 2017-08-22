<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('media_id')->comment('id for foreign table which it belongs to');;
            $table->string('media_type')->comment('name or morph which tables tt belongs to');
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
        Schema::dropIfExists('admin_media');
    }
}
