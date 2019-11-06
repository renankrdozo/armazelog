<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Veiculo;
use App\OrdemServico;

class OrdemservicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function cadastrar()
    {
        return view('ordemservico.cadastrar', ['veiculo' => Veiculo::all(['id', 'placa'])]);
    }



    public function listar()
    {


        $ordemservico = OrdemServico::paginate(20);
        return view('ordemservico.listar', compact('ordemservico'));
        //$ordemservico = Ordemservico::all();
        //$ordemservico = ordemservico::paginate(20);
        //foreach ($ordemservico as $item) {
        //  $item->entrada_id = Entrada::find($item->entrada_id)->id;
        //}
        //var_dump(ordemservico);
        //return view('ordemservico.listar', compact('ordemservico'));
        echo "ola";
    }



    public function salvar(Request $request)
    {
        $ordemservico = new OrdemServico();
        $ordemservico->fill($request->all());
        $ordemservico->save();
        \Session::flash('flash_message', [
            'msg' => "Dados cadastrados comsucesso!",
            'class' => "alert-success"
        ]);
        // return redirect()->route('ingresso.listar');
        return "salvou";
    }
}
