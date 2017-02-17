<?php

namespace creaBuenosAires;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    public function user()
    {
        return $this->hasMany('creaBuenosAires\User', 'nivel_estudios', 'id');
    }
}
