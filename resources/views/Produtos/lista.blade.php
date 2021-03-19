@extends('layout.inicio')
@section('conteudo')
    <div class="row">
        <div class="text-left col-8">
            <h1>Listagem de Produtos</h1>  
        </div>
        <div class="search-box text-right col-4">
            <form action="#" method="GET">
                <input type="text" id="search" name="search" placeholder="Procurar..." required>          
                <i class="ti-search"></i>
            </form>
        </div>
    </div>
    @if($search)
        <p>Buscando por: {{$search}}</p>
    @else
    @endif
    @if(count($produtos)>0)
        <div class="row">
        	@foreach($produtos as $produto)
                <div class="col-lg-4 col-md-4 mt-3">
                    <div class="card card-bordered">
                        @if($produto->img)
                            <img class="card-img-top img-fluid" src="{{asset('/storage/'. $produto->img)}}">  
                        @endif
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{route('produtos.show', ['produto'=>$produto->id])}}"><h5>{{$produto->nome}}</h5></a>
                                <p class="card-text" name="descricao">{{$produto->descricao}}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{route('produtos.edit', ['produto'=>$produto->id])}}" class="btn btn-link"><i class="ti-pencil"></i>  Editar</a> 
                                    </div>                   
                                    <form action="{{route('produtos.destroy', ['produto'=>$produto->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-link bg-transparent">
                                            <i class="ti-trash"></i>  Excluir  
                                        </button>
                                    </form>     
                                </div>
                                <button type="button" href="" data-toggle="modal" data-target="#compra{{$produto->id}}" class="btn btn-primary text-center">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
        	@endforeach
            @if(count($produtos)==0)
                <p>Não foi possível encontrar nenhum produto com {{$search}}</p>
            @elseif(count($produtos)==0)
                <p>Não há esse produto disponível</p>
            @endif
        </div>
	@endif
    <br>
    <div class="text-center">
        <a href="{{route('produtos.create')}}" class="btn btn-info">Adicionar Produto</a>
    </div>

    <!-- Início do modal de cadastrar compra -->
    @foreach($produtos as $produto)
    <div class="modal" tabindex="-1" role="dialog" id="compra{{$produto->id}}">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{$produto->nome}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('compras.store', ['produto'=>$produto->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset('/storage/'. $produto->img)}}" height="600px" width="600px">
                            </div>
                            <div class="col-6">
                                <p>Descrição: {{$produto->descricao}}</p>
                                <p>Estoque: {{$produto->estoque}}</p>
                                <p>Lote: {{$produto->lote}}</p>
                                <label>Quantidade</label>
                                <select name="quantidade" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <label>Valor</label>
                                <input type="text" name="valor_unidade" class="form-control">
                                <label>Cliente</label>
                                <select name="cliente_id" class="form-control">
                                    @foreach($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>
                        <button class="btn btn-info">Adicionar carrinho</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Fim do modal de finalizar compra -->
@endsection