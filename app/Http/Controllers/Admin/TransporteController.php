<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Transporte;
use App\Veiculo;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    //função para apenas usuarios conectados poderem acessar as paginas
    public function __construct()
    {
        $this->middleware('auth');
    }

    //função para chamar a view do transporte.blade.php
    public function transporte()
    {
        return view('transporte.transporte');
    }

    //função para chamar a view do listartransporte.blade.php
    public function listartransporte()
    {
        $transportes = Transporte::paginate(20);
        return view('transporte.listartransporte', compact('transportes'));
    }

    public function detalhe($id_transportes)
    {
        return view('transporte.detalhe', ['transporte' => Transporte::findOrFail($id_transportes)]);
    }

    //funçao que esta salvando os dados no banco na view 
    //de cadastro de transportadoras

    public function salvar(Request $request)
    {

        $transporte = new Transporte();
        $transporte->fill($request->all());
        $transporte->save();

//        $transporte->nome = $request->Nome;
//        $transporte->cnpj = $request->cnpj;
//        $transporte->endereco = $request->Endereco;
//        $transporte->cidade = $request->Cidade;
//        $transporte->cep = $request->Cep;
//        $transporte->email = $request->Email;
//        $transporte->contato = $request->Contato;

//        $transporte->save();


        \Session::flash('flash_message', [
            'msg' => "Dados cadastrados comsucesso!",
            'class' => "alert-success"
        ]);

        return redirect()->route('transporte.transporte');
    }

    //função para chamar a view do editartransporte.blade.php

    public function editar($id_transportes)
    {
        return view('transporte.editar', ['transporte' => Transporte::findOrFail($id_transportes)]);
    }

    public function atualizar(Request $request, $id_transportes)
    {
        $transporte = Transporte::find($id_transportes);
        $transporte->nome = $request->nome;
        $transporte->cnpj = $request->cnpj;
        $transporte->endereco = $request->endereco;
        $transporte->cidade = $request->cidade;
        $transporte->cep = $request->cep;
        $transporte->email = $request->email;
        $transporte->contato = $request->contato;
        $transporte->save();
        return view('transporte.listartransporte')->with('transporte', $transporte);
    }

    public function deletar($id_transportes)
    {
        $transporte = transporte::find($id_transportes);
        // Excluindo este objeto
        $transporte->delete();
        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Produto excluído com sucesso!";
        // Capturando objetos para enviar a view produto.pesquisar
        $transporte = transporte::all();
        // Retornando a view produto.pesquisar
        return view('transporte.listartransporte')->with('transporte', $transporte);
    }
}