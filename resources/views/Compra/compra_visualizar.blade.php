@extends('layout.inicio')
@section('conteudo')
    <h1>Visualizar Compra </h1>
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
                                <div class="col-3">
                                    <p>Valor: {{$produto->pivot->valor_unidade}}</p>   
                                </div>                   
                                <div class="col-5">
                                    <p>Quantidade: {{$produto->pivot->quantidade}}</p>  
                                </div> 
                                <div class="col-4"> 
                                    <p>Total: {{$produto->pivot->quantidade * $produto->pivot->valor_unidade}}</p>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       	@endforeach
    </div>
@endsection