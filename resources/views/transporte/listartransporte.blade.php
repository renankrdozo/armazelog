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
    <h1>Listando Transporte</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{route('transporte.transporte')}}">Adicionar</a>
                            <a class="btn btn-info" href="{{route('home')}}">Voltar ao Menu</a>
                        </p>
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">CEP</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Contato</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transportes as $transporte)

                                <tr>
                                    <th scope="row">{{ $transporte->id }}</th>
                                    <td >{{ $transporte->nome }}</td>
                                    <td>{{ $transporte->cnpj }}</td>
                                    <td>{{ $transporte->endereco }}</td>
                                    <td>{{ $transporte->cidade }}</td>
                                    <td>{{ $transporte->cep }}</td>
                                    <td>{{ $transporte->email }}</td>
                                    <td>{{ $transporte->contato }}</td>
                                    <td>
                                        <a class="btn btn-default btn-sm"
                                           href="{{route('transporte.detalhe',$transporte->id)}}">Detalhe</a>
                                        <a class="btn btn-default btn-sm"
                                           href="{{route('transporte.editar',$transporte->id)}}">Editar</a>
                                        <a class="btn btn-danger btn-sm"
                                           href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('transporte.deletar',$transporte->id)}}' : false)">Deletar</a>
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
