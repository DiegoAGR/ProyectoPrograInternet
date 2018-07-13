<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
  protected $fillable = [
      'nombre','pais'
  ];

  public function Albumes()
 {
     return $this->hasMany('App\Album');
 }

  protected $table = 'artistas';

}
