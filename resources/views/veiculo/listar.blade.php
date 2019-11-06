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
    <div class="box">
       <div class="box-header col-md-10">
            <form action="{{route('veiculo.filtro')}}" class="form form-inline" method="POST">
               {!!  csrf_field()   !!}
              <input type="text" class="form-control col-md-5" name="id" placeholder="Id">
              <input type="text" class="form-control" name="placa" placeholder="Placa">
              <input type="text" class="form-control" name="marca" placeholder="Marca">
                <input type="text" class="form-control" name="transporte" placeholder="Transportadora">
              <button class="btn btn-success" type="submit">Filtra Consulta</button>
           </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Listando Transporte </h2>     
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
                        <div>
                         
                            {!! $veiculo->links()  !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


