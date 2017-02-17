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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('sexo', ['F', 'M'])->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('dni')->unique();
            $table->tinyInteger('nivel_estudios')->nullable();
            $table->tinyInteger('titulo')->nullable();
            $table->string('email')->unique();
            $table->string('imagen')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
