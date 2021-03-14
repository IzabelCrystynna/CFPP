@extends('layout.inicio')
@section('conteudo')
    <h1>Visualizar Produto</b></h1>
    <hr>
    <div class="row">
        <div class="col-6 mt-0">
            <h4>Dados</h4>
            <div class="timeline-area">
                <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="ti-user"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Nome</h4>
                                <span class="time"><i class="ti-time"></i>{{$produto->created_at}}</span>
                            </div>
                            <p>{{$produto->nome}}</p>
                </div>
                <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="ti-comment-alt"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Descrição</h4>
                            </div>
                            <p>{{$produto->descricao}}</p>
                </div>
                <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="ti-server"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Valor</h4>
                            </div>
                            <p>{{$produto->valor_unidade}}</p>
                </div>
                <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="ti-comment"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Estoque - Lote</h4>
                            </div>
                            <p>{{$produto->estoque}} Unidades - {{$produto->lote}}</p>
                </div>
                <div class="text-right mt-25"><a href="{{route('produtos.index')}}" class="btn btn-info">Voltar</a></div>
            </div>       
        </div>
        <div class="col-6 mt-0">
            @if($produto->img)
                <p>
                    <img src="{{asset('/storage/'. $produto->img)}}" height="600px" width="600px">  
                </p>
            @else
                <p>
                    <img src="#" height="200px" width="200px" style="border-radius: 600px">  
                </p>
            @endif
        </div>
    </div>
@endsection