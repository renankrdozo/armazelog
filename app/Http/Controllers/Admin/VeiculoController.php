<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Transporte;
use App\Veiculo;
use App\Entrada;
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
        
        foreach ($veiculo as $item) {
            $item->transporte_nome = Transporte::find($item->transporte_id)->nome;
        }

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

        $veiculo = Veiculo::paginate(20);
        foreach ($veiculo as $item) {
            $item->transporte_nome = Transporte::find($item->transporte_id)->nome;
        }

        return view('veiculo.listar', compact('veiculo'));
    }

     

     public function editar($id_veiculo)
    {
        return view('veiculo.editar', ['veiculo' => Veiculo::findOrFail($id_veiculo)]);
    }


    public function atualizar(Request $request, $id_veiculo)
    {
        //var_dump($id_veiculo);
        $veiculo = veiculo::find($$id_veiculo);
        $veiculo->placa = $request->placa;
        $veiculo->tipo = $request->tipo;
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->peso = $request->peso;
        $veiculo->ano = $request->ano;
        $veiculo->save();
        $veiculo = Transporte::paginate(20);
        return view('veiculo.listar', compact('veiculo'))->with('veiculo', $veiculo);
        
    }








    public function deletar($id_veiculo)
    {
        if(count(Entrada::where('veiculo_id',$id_veiculo)->get()) > 0){
            \Session::flash('flash_message', [
                'msg' => "Existem entradas cadastrados nesse veículo!",
                'class' => "alert-error"
            ]);

           $veiculo = Veiculo::paginate(20);
            foreach ($veiculo as $item) {
                $item->transporte_nome = Transporte::find($item->transporte_id)->nome;
            }

            return view('veiculo.listar', compact('veiculo'));
        }

        $veiculo = veiculo::find($id_veiculo);
        // Excluindo este objeto
        $veiculo->delete();
        // Criando uma mensagem para ser enviada a view produto.pesquisar
        \Session::flash('flash_message', [
            'msg' => "Veículo excluído com com sucesso!",
            'class' => "alert-success"
        ]);
        // Retornando a view produto.pesquisar
        $veiculo = Veiculo::paginate(20);
        foreach ($veiculo as $item) {
            $item->transporte_nome = Transporte::find($item->transporte_id)->nome;
        }

        return view('veiculo.listar', compact('veiculo'));
    }

}
 