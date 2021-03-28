@extends('layout.inicio')
@section('conteudo')
<!-- Página onde visualizar os produtos de uma compra -->
    <h1>Visualizar Compra </h1>
	<div class="row">
        <!-- laço de repetição de lista dos os produtos de uma compra -->
        @foreach($produtos as $produto)
            <div class="col-lg-4 col-md-4 mt-3">
                <div class="card card-bordered">
                    @if($produto->img)
                        <img class="card-img-top img-fluid" src="{{asset('/storage/'. $produto->img)}}">  
                    @else
                        <img class="card-img-top img-fluid" src="{{asset('resumo/srtdash/assets/images/avatar_produto.png')}}">
                    @endif
                    <div class="card-body">
                        <div class="text-center">
                            <h5>{{$produto->nome}}</h5>
                            <p class="card-text" name="descricao">{{$produto->descricao}}</p>
                            <hr>
                            <div class="row">
                                <div class="col-3">
                                    <p>Valor: {{$produto->pivot->valor_unidade}}</p>   
                                </div>                   
                                <div class="col-5">
                                    <p>Quantidade: {{$produto->pivot->quantidade}}</p>  
                                </div> 
                                <div class="col-4"> 
                                    <p>Total: {{$total=$produto->pivot->quantidade * $produto->pivot->valor_unidade}}</p>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       	@endforeach
    </div>
    <br>
    <div class="text-center">
        <a href="{{route('compras.index')}}" class="btn btn-info">Voltar</a>
    </div>
@endsection