<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function songs()
     {
         return $this->belongsToMany('App\Song');
     }


    protected $fillable = [
        'nombre', 'nickname' , 'correoElectronico' , 'password',
    ];

    //Accesor para cambiar la primera letra a mayuscula del atributo que se mande
    public function getPrimerLetraMayus($value)
    {
     return ucfirst($value);
    }

    //Setteador de nicknames a minusculas para practicidad en base de datos
    public function setNicknameMinus($value)
    {
      $this->attributes['nickname'] = strtolower($value);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'usuarios';

}
