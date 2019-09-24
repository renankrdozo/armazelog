<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';

    public function veiculo()
    {
        return $this->belongsTo('App\Veiculo');
    }
    public function unidade()
    {
    	return $this->belongsTo('App\Unidade');
    }
}