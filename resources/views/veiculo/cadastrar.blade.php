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

    <h1>Cadastro de Veiculos </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('veiculo.salvar')}}" method="post">
                            {{ csrf_field() }}

                        <div class="form-group"{{ $errors->has('transporte')?'has-error' : '' }}>
                            <label for="transporte_id">Transporte</label>
                            <select name="transporte_id" id="transporte_id" class="form-control">
                             <option value="#">-- Seleciona a Transportadora --</option>        
                                    @foreach($transportes as $transporte)
                             <option value="{{$transporte->id}}">{{$transporte->nome}}</option>
                                    @endforeach
                            </select>

                            </div>

                            <div class="form-group {{ $errors->has('placa') ? 'has-error' : '' }}">
                                <label for="placa">Placa</label>
                                <input type="text" name="placa" class="form-control" placeholder="Placa veiculo">
                                @if($errors->has('placa'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('placa') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('tipo') ? 'has-error' : '' }}">
                                <label for="tipo">Tipo</label>
                                <select type="text" name="tipo" class="form-control">
                                <option value="#">-- Seleciona o Tipo --</option>
                                <option>Cavalo</option>
                                @if($errors->has('tipo'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('tipo') }}</strong>
                                </span>
                                @endif
                               </select>
                            </div>
                            <div class="form-group {{ $errors->has('marca') ? 'has-error' : '' }}">
                                <label for="marca">Marca</label>
                                <select type="text" name="marca" class="form-control" placeholder="Marca">
                                <option value="#">-- Seleciona a Marca --</option>
                                <option>Scania</option>
                                <option>Volvo</option>
                                <option>M.benz</option>
                                <option>Volkswagen</option>
                                <option>DAF</option>
                                <option>Outros</option>
                                @if($errors->has('marca'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('marca') }}</strong>
                                </span>
                                @endif
                                </select>
                            </div>

                            <div class="form-group {{ $errors->has('modelo') ? 'has-error' : '' }}">
                                <label for="modelo">Modelo</label>
                                <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                                @if($errors->has('modelo'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('modelo') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('peso') ? 'has-error' : '' }}">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" class="form-control" placeholder="Peso">
                                @if($errors->has('peso'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('peso') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class= "form-group {{ $errors->has('ano') ? 'has-error' : '' }}">
                                <label for="ano">Ano</label>
                                <input type="text" name="ano" class="form-control" placeholder="Ano">
                                @if($errors->has('ano'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('ano') }}</strong>
                                </span>
                                @endif
                            </div>

                            <button class="btn btn-info">Adicionar</button>
                            <a class="btn btn-info" href="{{route('home')}}">Voltar ao Menu</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
