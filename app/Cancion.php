<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
      protected $fillable = [
        'titulo','artista','album','genero','duracion'
      ];

      public function genero()
      {
       return $this->hasOne('App\genero','id');
      }

      public function album()
         {
             return $this->belongsTo('App\album');
         }

    public function comments()
   {
       return $this->morphMany('App\Comentario', 'commentable');
   }


      protected $table = 'cancion';
}
