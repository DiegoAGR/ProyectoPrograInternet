<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comentario extends Model
{

      public function commentable()
     {
         return $this->morphTo();
     }


    protected $fillable = [
      'texto',''
    ];

    protected $table = 'comentarios';
    protected $dates = ['deleted_at'];

}
