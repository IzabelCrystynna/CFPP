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
                                <a href="#" class="btn btn-primary text-center">Comprar</a>
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
@endsection