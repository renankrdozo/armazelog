@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
@stop
@section('content')
    <div class="container">
        <h1>Atualizar Transporte</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('transporte.atualizar', $transporte->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome do transporte"
                                       value="{{$transporte->nome}}">
                                @if($errors->has('nome'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('cnpj') ? 'has-error' : '' }}">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" id="cnpj" name="cnpj" class="form-control"
                                       placeholder="CNPJ do transporte" value="{{$transporte->cnpj}}">
                                @if($errors->has('cnpj'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('cnpj') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('endereco')? 'has-error' : '' }}">
                                <label for="endereco">Endereço</label>
                                <input type="text" id="endereco" name="endereco" class="form-control"
                                       placeholder="Endereço do Transporte" value="{{$transporte->endereco}}">
                                @if($errors->has('endereco'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('cidade')? 'has-error' : '' }}">
                                <label for="cidade">Cidade</label>
                                <input type="text" id="cidade" name="cidade" class="form-control" placeholder="cidade"
                                       value="{{$transporte->cidade}}">
                                @if($errors->has('Cidade'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('cep')? 'has-error' : '' }}">
                                <label for="cep">Cep</label>
                                <input type="text" id="cep" name="cep" class="form-control"
                                       placeholder="Cep do transporte" value="{{$transporte->cep}}">
                                @if($errors->has('cep'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('cep') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email')? 'has-error' : '' }}">
                                <label for="email">E-mail</label>
                                <input type="text" id="email" name="email" class="form-control"
                                       placeholder="E-mail do Transporte" value="{{$transporte->email}}">
                                @if($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('contato')? 'has-error' : '' }}">
                                <label for="contato">Contato</label>
                                <input type="text" id="contato" name="contato" class="form-control"
                                       placeholder="Contato do Transporte" value="{{$transporte->contato}}">
                                @if($errors->has('contato'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('contato') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button class="btn btn-info">Adicionar</button>
                            <a class="btn btn-info" href="{{route('home')}}">Voltar ao Menu</a>
                            <a class="btn btn-info" href="{{route('transporte.listartransporte')}}">Listar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
