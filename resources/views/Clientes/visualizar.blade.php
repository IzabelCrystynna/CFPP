@extends('layout.inicio')
@section('conteudo')
<!--Página que visualizar as informações do cliente-->
    <h1>Perfil do Cliente</b></h1>
    <hr>
    <div class="row">
        <!--Exibir a imagem do cliente, caso ele tenha cadastrado ou uma imagem padrão do sistema-->
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
        <!--Exibir as informações do cliente-->
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Dados</h4>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Nome</h4>
                            <span class="time"><i class="ti-time"></i>{{$cliente->created_at}}</span>
                        </div>
                        <p>{{$cliente->nome}}</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Endereço</h4>
                        </div>
                        <p>{{$cliente->rua}}, {{$cliente->numero_casa}}, {{$cliente->cidade}} - {{$cliente->UF}} - {{$cliente->bairro}}</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Telefone</h4>
                        </div>
                        <p>{{$cliente->telefone}}</p>  
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-money"></i>
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
    <div class="text-center">
        <a href="{{route('clientes.index')}}" class="btn btn-info">Voltar</a>
    </div>
@endsection