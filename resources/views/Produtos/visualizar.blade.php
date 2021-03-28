@extends('layout.inicio')
@section('conteudo')
<!-- Página de Visualizar detalhes de um produto-->
    <h1>Visualizar Produto</b></h1>
    <hr>
    <div class="row">
        <div class="col-8">
            <!-- A imagem do produto-->
            @if($produto->img)
                <p>
                    <img src="{{asset('/storage/'. $produto->img)}}" height="600px" width="600px">  
                </p>
            @else
                <p>
                    <img src="{{asset('resumo/srtdash/assets/images/avatar_produto.png')}}" height="600px" width="600px"> 
                </p>
            @endif
        </div>
        <!-- Informações do produto-->
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Dados</h4>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Nome</h4>
                            <span class="time"><i class="ti-time"></i>{{$produto->created_at}}</span>
                        </div>
                        <p>{{$produto->nome}}</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-comments-o"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Descrição</h4>
                        </div>
                        <p>{{$produto->descricao}}</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Estoque</h4>
                        </div>
                        <p>{{$produto->estoque}} Unidades</p>  
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Lote</h4>
                        </div>
                        <p>{{$produto->lote}}</p>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Voltar para página de listagem dos produtos-->
    <div class="text-center mt-5">
        <a href="{{route('produtos.index')}}" class="btn btn-info intem-center">Voltar</a>
    </div>
@endsection