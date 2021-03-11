@extends('layout.inicio')
@section('conteudo')
    <h1>Perfil do Cliente</b></h1>
    <hr>
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <p>Nome</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->nome}}</p>
                </div>
                <p>Rua</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->rua}}</p>
                </div>
                <p>Número</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->numero_casa}}</p>
                </div>
                <p>Bairro</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->bairro}}</p>
                </div>
                <p>Cidade</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->cidade}}</p>
                </div>
                <p>UF</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->UF}}</p>
                </div>
                <p>Telefone</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->telefone}}</p>
                </div>
                <p>Renda</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$cliente->renda}}</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            @if($cliente->img)
                <p>
                    <img src="{{asset('/storage/'. $cliente->img)}}" height="200px" width="200px" style="border-radius: 600px">  
                </p>
            @else
                <p>
                    <img src="{{asset('resumo/srtdash/assets/images/perfil_cliente.png')}}" height="200px" width="200px" style="border-radius: 600px">  
                </p>
            @endif
        </div>
    </div>
    <br>
    <a href="{{route('clientes.index')}}" class="btn btn-info">Voltar</a>
@endsection