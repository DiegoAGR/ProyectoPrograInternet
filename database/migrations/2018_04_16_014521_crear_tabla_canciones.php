<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCanciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancion', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('titulo', 50);
          $table->string('artista', 30);

          $table->integer('genero_id')->unsigned();
          $table->foreign('genero_id')->references('id')->on('generos');

          $table->integer('album_id')->unsigned();
          $table->foreign('album_id')->references('id')->on('albums');

          $table->time('duracion');
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
        Schema::dropIfExists('cancion');
    }
}
