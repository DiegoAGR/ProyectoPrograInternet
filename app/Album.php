<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{

    public function canciones()
   {
       return $this->hasMany('App\Canciones','id');
   }

  protected $fillable = [
      'nombre','anio'
  ];

  protected $table = 'albums';

}
