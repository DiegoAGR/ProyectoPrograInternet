<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
      'texto',
    ];

    protected $table = 'comentario';
}
