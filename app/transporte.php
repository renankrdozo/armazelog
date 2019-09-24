<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{

    protected $table = 'transportes';
    protected $fillable = ['nome', 'cnpj', 'endereco', 'cidade', 'cep', 'email', 'contato'];

    public function veiculo()
    {
        return $this->hasMany('App\Veiculo');
    }


    public function deletarveiculo()
    {
        foreach ($this->veiculo as $veic) {
            $veic->delete();
        }

        return true;
    }
}
