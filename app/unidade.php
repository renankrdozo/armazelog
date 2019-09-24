<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidades';

    public function entrada() {
        return $this->hasMany('App\Entrada');
    }
}
