<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('nombre');
          $table->string("nickname");
          $table->string('correoElectronico')->unique();
          $table->string('password');
          $table->rememberToken();
          $table->timestamps();
          $table->integer('idBiblioteca')->nullable();
          $table->string('avatar')->default('default.jpg');
          $table->integer('rol')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biblioteca');
        Schema::dropIfExists('usuarios');
    }
}
