@extends('layout.inicio')
@section('conteudo')
    <h1>Cadastro de Produtos</h1>
    <hr>
    <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label>Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" value="{{old('nome')}}">
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label>Lote</label>
                <input class="form-control @error('lote') is-invalid @enderror" type="text" name="lote" value="{{old('lote')}}">
                @error('lote')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
        </div>
    	<div class="row">
            <div class="form-group col-6">
                <label>Estoque</label>
                <input class="form-control @error('estoque') is-invalid @enderror" type="text" name="estoque" value="{{old('estoque')}}">
                @error('estoque')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label>Descrição</label>
                <input class="form-control @error('descricao') is-invalid @enderror" type="text" name="descricao" value="{{old('descricao')}}">
                @error('descricao')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-btn">
                    <span class="btn btn-outline-light bg-transparent p-0">    
                    </span>
                </span>
            </div>
        </div>
        <div class="custom-file">
            <input type="file" name="img" id="img" class="custm-file-input" onchange="this.nextElementSibling.innerText=this.files[0].name">
            <label for="img" class="custom-class-label">Produto</label>
        </div>
        <div class="text-center">
            <button class="btn btn-info">Enviar</button>
        </div>
    </form>
@endsection