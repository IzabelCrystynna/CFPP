@extends('layout.inicio')
@section('conteudo')
    <h1>Perfil do Cliente</b></h1>
    <hr>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <h4>Dados</h4>
                <div class="card-body">
                    <div class="timeline-area">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="ti-user"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Nome</h4>
                            </div>
                            <p>{{$cliente->nome}}</p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Endereço</h4>
                            </div>
                            <p>{{$cliente->rua}}, {{$cliente->numero_casa}}, {{$cliente->cidade}} - {{$cliente->UF}}</p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="ti-email"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Bairro</h4>
                            </div>
                            <p>{{$cliente->bairro}}</p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Telefone</h4>
                            </div>
                            <p>{{$cliente->telefone}}</p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="ti-server"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Renda</h4>
                            </div>
                            <p>{{$cliente->renda}}</p>
                        </div>
                    </div>
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
    <div class="text-center">
        <a href="{{route('clientes.index')}}" class="btn btn-info">Voltar</a>
    </div>
@endsection