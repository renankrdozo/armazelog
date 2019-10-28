@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
@stop
@section('content')
    <h1>Listando Transporte </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{route('ingresso.cadastrar')}}">Adicionar</a>
                            <a class="btn btn-info" href="{{ route('home') }}">Voltar ao Menu</a>
                        </p>
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hora</th>
                                <th>Data</th>
                                <th>Mercadoria</th>
                                <th>Peso</th>
                                <th>Quantidade</th>
                                <th>Nota Fiscal</th>
                                <th>Conhecimento</th>
                                <th>Veiculo</th>
                                <th>Unidade</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ingresso as $c)

                                <tr>
                                    <th scope="row">{{ $c->id }}</th>
                                    <td>{{ $c->hora }}</td>
                                    <td>{{ $c->data }}</td>
                                    <td>{{ $c->mercadoria }}</td>
                                    <td>{{ $c->peso }}</td>
                                    <td>{{ $c->quantidade }}</td>
                                    <td>{{ $c->nota_fiscal }}</td>
                                    <td>{{ $c->conhecimento }}</td>
                                    <td>{{ $c->veiculo_nome }}</td>
                                    <td>{{ $c->unidade_nome }}</td>

                                    <td>
                                        <a class="btn btn-default" href="">Editar</a>
                                        <a class="btn btn-danger"  href="">Deletar</a>
             
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>

                        <div align="center">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


