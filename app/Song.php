<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
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

public function comentarios()
{
   return $this->morphMany('App\Comentario', 'commentable');
}

public function usuarios()
{
  return $this->belongsToMany('App\User');
}



  protected $table = 'songs';
  protected $dates = ['deleted_at'];
}
