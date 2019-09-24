<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transporte;
use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    //função para apenas usuarios conectados poderem acessar as paginas
    public function __construct()
    {
        $this->middleware('auth');
    }

//função para chamar a view do transporte.blade.php
    public function cadastrar()
    {
        return view('veiculo.cadastrar', ['transportes' => Transporte::all(['id', 'nome'])]);
    }

    public function listar()
    {
        $veiculo = Veiculo::paginate(20);
        return view('veiculo.listar', compact('veiculo'));
    }
    //funçao que esta salvando os dados no banco na view
    //de cadastro de transportadoras

    public function salvar(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->fill($request->all());
        $veiculo->save();
        \Session::flash('flash_message', [
            'msg' => "Dados cadastrados comsucesso!",
            'class' => "alert-success"
        ]);
        return redirect()->route('veiculo.listar');
    }

}
 