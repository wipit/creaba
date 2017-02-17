<?php

namespace creaBuenosAires;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    public function user()
    {
        return $this->hasMany('creaBuenosAires\User', 'titulo', 'id');
    }
}
