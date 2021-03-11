@extends('layout.inicio')
@section('conteudo')
    <h1>Visualizar Produto</b></h1>
    <hr>
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <p>Nome</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$produto->nome}}</p>
                </div>
                <p>Lote</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$produto->lote}}</p>
                </div>
                <p>Estoque</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$produto->estoque}}</p>
                </div>
                <p>Valor</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$produto->valor_unidade}}</p>
                </div>
                <p>Descrição</p>
                <div style="background-color: #c2c2d6; border-radius: 5px">
                    <p class="mb-2" style="padding-left: 20px;">{{$produto->descricao}}</p>
                </div>
            </div>
        </div>
        <div class="col-4">
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
    <br>
    <a href="{{route('produtos.index')}}" class="btn btn-info">Voltar</a>
@endsection