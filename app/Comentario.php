<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

      public function commentable()
     {
         return $this->morphTo();
     }


    protected $fillable = [
      'texto',
    ];

    protected $table = 'comentario';
}
