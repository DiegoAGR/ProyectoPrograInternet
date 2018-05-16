<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Agregar fillables

class Album extends Model
{

    public function canciones()
   {
       return $this->hasMany('App\Song');
   }

    public function comments()
    {
    return $this->morphMany('App\Comentario', 'commentable');
    }

    public function artista()
    {
      return $this->hasOne('App\Artista','id');
    }

  protected $fillable = [
      'nombre','anio'
  ];

  protected $table = 'albums';

}
