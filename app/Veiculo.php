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



 /*   public function ScopeID($query , $id)
    {
       if($id)
        return $query->where('id', 'LIKE',"%id%");
    }

    public function ScopePlaca($query , $placa)
    {
       if($placa)
        return $query->where('placa', 'LIKE',"%placa%");
    }

    public function ScopeMarca($query , $marca)
    {
       if($marca)
        return $query->where('marca', 'LIKE',"%marca%");
    }

    public function ScopeTransporte($query , $transporte)
    {
       if($transporte)
        return $query->where('transporte', 'LIKE',"%transporte%");
    }
    */
    public function filtro(array $data , $totalPage)
    {
         $veiculos = $this->where(function ($query) use ($data){
            if(isset($data ['id']))
            $query->where('id',$data['id']);

            if(isset($data ['placa']))
            $query->where('placa',$data['placa']);

            if(isset($data ['marca']))
            $query->where('marca',$data['marca']);

            if(isset($data ['transporte']))
            $query->where('transporte',$data['transporte']);
            })     //->toSql();dd($veiculos);

         ->paginate($totalPage);
         return $veiculos;
    }

}
