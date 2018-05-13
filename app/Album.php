<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Agregar fillables

class Album extends Model
{

    public function canciones()
   {
       return $this->hasMany('App\Song','id');
   }

    public function comments()
    {
    return $this->morphMany('App\Comentario', 'commentable');
    }

  protected $fillable = [
      'nombre','anio'
  ];

  protected $table = 'albums';

}
