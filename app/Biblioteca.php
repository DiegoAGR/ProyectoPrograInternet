<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    //

    protected $fillable = [
        'id_Usuario', 'idCancion',
    ];

      protected $table = 'song_user';
}
