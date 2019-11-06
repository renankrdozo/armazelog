<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';
    protected $fillable = ['hora', 'data', 'mercadoria', 'peso', 'quantidade', 'nota_fiscal', 'conhecimento', 'veiculo_id', 'unidade_id'];

    public function veiculo()
    {
        return $this->belongsTo('App\Veiculo');
    }
    public function unidade()
    {
    	return $this->belongsTo('App\Unidade');
    }


    /**public function filtro(array $data , $totalPage)
    {
             $ingresso = $this->where(function ($query) use ($data){
            if(isset($data ['id']))
            $query->where('id',$data['id']);
            
            if(isset($data ['data']))
            $query->where('data',$data['data']);
            
            if(isset($data ['mercadoria']))
            $query->where('mercadoria',$data['mercadoria']);

            if(isset($data ['nota_fiscal']))
            $query->where('nota_fiscal',$data['nota_fiscal']);
            })     
            if(isset($data ['conhecimento']))
            $query->where('conhecimento',$data['conhecimento']);
            }) 
            if(isset($data ['veiculo_id']))
            $query->where('veiculo_id',$data['veiculo_id']);
            }) 

            ->paginate($totalPage);
            return $ingresso;
    }**/
}