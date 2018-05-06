<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
      protected $fillable = [
        'titulo','artista','album','album','genero','duracion'
      ];

      protected $table = 'cancion';
}
