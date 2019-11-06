<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    protected $table = 'ordemservicos';
    protected $fillable = ['hora', 'data', 'naturezacarga', 'valortotal', 'status', 'entrada_id'];

    public function entrada()
    {
        return $this->belongsTo('App\Entrada');
    }

}


