<?php

namespace creaBuenosAires;

use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    protected $table = 'intereses';

    public function users() {
        return $this->belongsToMany('creaBuenosAires\User');
    }
}
