<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';
    protected $fillable = ['id', 'placa', 'tipo', 'marca', 'modelo', 'peso', 'ano', 'transporte_id'];

    public function transporte()
    {
        return $this->belongsTo('App\Transporte', 'id');
    }

    public function entradas()
    {
        return $this->hasMany('App/Entrada');
    }
}
