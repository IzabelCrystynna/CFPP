@extends('layout.inicio')
@section('conteudo')
    <h1>Visualizar Produto</b></h1>
    <hr>
    <div class="row">
        <div class="col-6">
            <h4>Dados</h4>
            <h4>Nome</h4>
            <p>{{$produto->nome}}</p>
            <h4>Descrição</h4>
            <p>{{$produto->descricao}}</p>
            <h4>Estoque - Lote</h4>
            <p>{{$produto->estoque}} Unidades - {{$produto->lote}}</p>      
        </div>
        <div class="col-6">
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
    <div class="text-center mt-5">
        <a href="{{route('produtos.index')}}" class="btn btn-info intem-center">Voltar</a>
    </div>
@endsection