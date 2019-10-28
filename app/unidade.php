<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidades';
    protected $fillable = ['descricao'];

    public function entrada() {
        return $this->hasMany('App\Entrada');
    }
}
