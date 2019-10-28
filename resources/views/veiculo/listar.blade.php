@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
@stop
@section('content')
@if(Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div align="center" class="alert {{ Session::get('flash_message')['class'] }}">
                        {{ Session::get('flash_message')['msg'] }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <h1>Listando Transporte </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{route('veiculo.cadastrar')}}">Adicionar</a>
                            <a class="btn btn-info" href="{{ route('home') }}">Voltar ao Menu</a>
                        </p>
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Placa</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Peso</th>
                                <th>Ano</th>
                                <th>Transporte</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($veiculo as $c)

                                <tr>
                                    <th scope="row">{{ $c->id }}</th>
                                    <td>{{ $c->placa }}</td>
                                    <td>{{ $c->tipo }}</td>
                                    <td>{{ $c->marca }}</td>
                                    <td>{{ $c->modelo }}</td>
                                    <td>{{ $c->peso }}</td>
                                    <td>{{ $c->ano }}</td>
                                    <td>{{ $c->transporte_nome }}</td>

                                    <td>
                                        <a class="btn btn-default" href="{{route('veiculo.editar',$c->id)}}">Editar</a>
                                        <a class="btn btn-danger"
                                           href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('veiculo.deletar',$c->id)}}' : false)">Deletar</a>
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


