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
                            <a class="btn btn-info" href="{{route('ordemservico.cadastrar')}}">Adicionar</a>
                            <a class="btn btn-info" href="{{ route('home') }}">Voltar ao Menu</a>

                        </p>
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hora</th>
                                <th>Data</th>
                                <th>Natureza da Carga</th>
                                <th>Valor total</th>
                                <th>Status</th>
                                <th>Veiculo</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ordemservico as $c)

                                <tr>
                                    <th scope="row">{{ $c->id }}</th>
                                    <td>{{ $c->hora }}</td>
                                    <td>{{ $c->data }}</td>
                                    <td>{{ $c->naturezacarga }}</td>
                                    <td>{{ $c->valortotal }}</td>
                                    <td>{{ $c->status }}</td>   
                                    <td>{{  }}</td>
                                  

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


