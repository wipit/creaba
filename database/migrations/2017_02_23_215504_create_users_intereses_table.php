<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInteresesTable extends Migration
{
    public function up()
    {
        Schema::create('interes_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('interes_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('interes_user');
    }
}
