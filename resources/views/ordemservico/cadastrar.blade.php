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
    <h1>Registrar WMS </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('ordemservico.salvar')}}" method="post">
                            {{ csrf_field() }}

                           <div class="form-group">
                            <label for="hora">Hora</label>
                            <input type="time" name="hora" class="form-control" placeholder="hora do ingresso">
                            @if($errors->has('data'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('hora') }}</strong>
                                </span>
                            @endif
                           </div>

                           <div class="form-group">
                            <label for="data">Data</label>
                            <input type="date" name="data" class="form-control" placeholder="Data do ingresso">
                            @if($errors->has('data'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('data') }}</strong>
                                </span>
                            @endif
                           </div>

                           <div class="form-group">
                            <label for="naturezacarga">naturezacarga</label>
                            <select type="date" name="naturezacarga" class="form-control">
                                  <option value="1">Baixar Carga</option>
                                  <option value="2">Transbordo</option>
                                </select>
                            @if($errors->has('naturezacarga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('naturezacarga') }}</strong>
                                </span>
                            @endif
                           </div>

                           <div class="form-group">
                            <label for="valortotal">valor total</label>
                            <input type="text" name="valortotal" class="form-control" placeholder="valortotal">
                            @if($errors->has('peso'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('peso') }}</strong>
                                </span>
                            @endif
                           </div>

                            <div class="form-group">
                            <label for="status">status</label>
                            <select type="date" name="status" class="form-control">
                                  <option value="1">Aberto</option>
                                  <option value="2">Pendente</option>
                                  <option value="2">fechado</option>
                                </select>
                            @if($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                           </div>

                           <div class="form-group" {{ $errors->has('veiculo') ? 'has-error':'' }}>
                                <label for="veiculo_id">Veiculo</label>
                                <select name="veiculo_id" id="veiculo_id" class="form-control">
                                @foreach($veiculo as $c)
                                 <option value="{{$c->id}}">{{$c->placa}}</option>
                                @endforeach
                               </select>
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