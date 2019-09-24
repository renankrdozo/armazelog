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
    <h1>Cadastro Transporte </h1>
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <div class="panel panel-default">                
                <div class="panel-body">                                    
                    <form action="{{route('transporte.salvar')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do transporte">
                            @if($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('cnpj') ? 'has-error' : '' }}">
                            <label for="email">CNPJ</label>
                            <input type="text" name="cnpj" class="form-control" placeholder="CNPJ do transporte">
                            @if($errors->has('cnpj'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cnpj') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('endereco')? 'has-error' : '' }}">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço do Transporte">
                            @if($errors->has('endereco'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('endereco')? 'has-error' : '' }}">
                            <label for="endereco">Cidade</label>
                            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                            @if($errors->has('cidade'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('cep')? 'has-error' : '' }}">
                            <label for="endereco">Cep</label>
                            <input type="text" name="cep" class="form-control" placeholder="Cep do transporte">
                            @if($errors->has('cep'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cep') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email')? 'has-error' : '' }}">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail do Transporte">
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('contato')? 'has-error' : '' }}">
                            <label for="contato">Contato</label>
                            <input type="text" name="contato" class="form-control" placeholder="Contato do Transporte">
                            @if($errors->has('contato'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contato') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button class="btn btn-info">Adicionar</button>
                        <a class="btn btn-info" href="{{route('home')}}">Voltar ao Menu</a>
                        <a class="btn btn-info" href="{{route('transporte.listartransporte')}}">listar </a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

