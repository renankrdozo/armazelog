@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
@stop
@section('content')
    <div class="container">
        <h1>Detalhes do Transporte: {{$transporte->nome}}</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{route('transporte.listartransporte')}}">Voltar</a>
                        </p>
                        <h5>{{ $transporte->nome }}</h5>
                        <p>{{ $transporte->cnpj }}</p>
                        <p>{{ $transporte->endereco }}</p>
                        <p>{{ $transporte->cidade }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
