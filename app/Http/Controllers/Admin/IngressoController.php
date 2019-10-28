<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transporte;
use App\Veiculo;
use App\Entrada;
use App\Unidade;

class IngressoController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }    

    public function cadastrar()
    {
    	return view('ingresso.cadastrar', ['veiculo' => Veiculo::all(['id', 'placa'])]);
    }

    
    public function listar()
    {
    	$ingresso = Entrada::all();
        foreach ($ingresso as $item) {
            $item->veiculo_nome = Veiculo::find($item->veiculo_id)->placa;
            $item->unidade_nome = Unidade::find($item->unidade_id)->descricao;
        }
        return view('ingresso.listar', compact('ingresso'));
    }
   
    public function salvar(Request $request)
    {
        $entradas = new Entrada();
        $entradas->fill($request->all());
        $entradas->save();
        \Session::flash('flash_message', [
            'msg' => "Dados cadastrados comsucesso!",
            'class' => "alert-success"
        ]);
        // return redirect()->route('ingresso.listar');
        return "salvou";
    }

}
