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

    <h1>Cadastro Veiculo </h1>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">                
                <div class="panel-body">                                    
                        <form action="{{route('veiculo.atualizar', $veiculo->id)}}" method="post">
                        {{ csrf_field() }}

                         

                        <div class="form-group {{ $errors->has('Placa') ? 'has-error' : '' }}">
                            <label for="nome">Placa</label>
                          <input type="text" name="Placa" class="form-control" placeholder="Nome do transporte" value="{{$veiculo->placa}}">
                            @if($errors->has('Placa'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Placa') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                        <div class="form-group {{ $errors->has('Tipo') ? 'has-error' : '' }}">
                            <label for="email">Tipo</label>
                            <input type="text" name="Tipo" class="form-control" placeholder=" carreta" value="{{$veiculo->tipo}}">
                            @if($errors->has('Tipo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Tipo') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('Marca')? 'has-error' : '' }}">
                            <label for="endereco">Marca</label>
                            <input type="text" name="Marca" class="form-control" placeholder="Endereço do Transporte" value="{{$veiculo->marca}}">
                            @if($errors->has('Marca'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Marca') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('Modelo')? 'has-error' : '' }}">
                            <label for="endereco">Modelo</label>
                            <input type="text" name="Modelo" class="form-control" placeholder="Cidade" value="{{$veiculo->modelo}}">
                            @if($errors->has('Modelo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Modelo') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('Peso')? 'has-error' : '' }}">
                            <label for="endereco">Peso</label>
                            <input type="text" name="Peso" class="form-control" placeholder="Peso" value="{{$veiculo->peso}}">
                            @if($errors->has('Peso'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Peso') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('Ano')? 'has-error' : '' }}">
                            <label for="endereco">Ano</label>
                            <input type="text" name="Ano" class="form-control" placeholder="Ano" value="{{$veiculo->ano}}">
                            @if($errors->has('Ano'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Ano') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <button class="btn btn-info">Adicionar</button>
                        <a class="btn btn-info" href="home">Voltar ao Menu</a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection