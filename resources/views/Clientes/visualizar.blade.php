@extends('layout.inicio')
@section('conteudo')
    <h1>Perfil do Cliente</b></h1>
    <hr>
    <div class="row">
        <div class="col-6">
            <h4>Dados</h4>
            <h4>Nome</h4>
            <p>{{$cliente->nome}}</p>
            <h4>Endereço</h4>
            <p>{{$cliente->rua}}, {{$cliente->numero_casa}}, {{$cliente->cidade}} - {{$cliente->UF}} - {{$cliente->bairro}}</p>
            <h4>Telefone</h4>
            <p>{{$cliente->telefone}}</p>
            <h4>Renda</h4>
            <p>{{$cliente->renda}}</p>
        </div>
        <div class="col-6">
            @if($cliente->img)
                <p>
                    <img src="{{asset('/storage/'. $cliente->img)}}" height="200px" width="200px" style="border-radius: 600px">  
                </p>
            @else
                <p>
                    <img src="{{asset('resumo/srtdash/assets/images/avatar_padrao.png')}}" height="200px" width="200px" style="border-radius: 600px">  
                </p>
            @endif
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('clientes.index')}}" class="btn btn-info">Voltar</a>
    </div>
@endsection