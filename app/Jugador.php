<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = ['email', 'nombre', 'apellido', 'sobrenombre'];

    public function comments()
    {
        return $this->hasMany('App\Invitacion');
    }

}
