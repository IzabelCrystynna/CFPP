@extends('layout.inicio')
@section('conteudo')
    <h1>Editar Informações</h1>
    <hr>
    <form action="{{route('produtos.update', ['produto'=>$produto->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    	<div class="form-group">
    		<label>Nome</label>
    		<input class="form-control" type="text" name="nome" value="{{$produto->nome}}">
    	</div>
        <div class="row">
            <div class="form-group col-5">
                <label>Lote</label>
                <input class="form-control" type="text" name="lote" value="{{$produto->lote}}">
            </div>
            <div class="form-group col-2">
                <label>Estoque</label>
                <input class="form-control" type="text" name="estoque" value="{{$produto->estoque}}">
            </div>
            <div class="form-group col-5">
                <label>Valor</label>
                <input class="form-control" type="text" name="valor_unidade" value="{{$produto->valor_unidade}}">
            </div>
        </div>
        <div class=row>
            <div class="form-group col-4">
                <label>Descrição</label>
                <input class="form-control" type="text" name="descricao" value="{{$produto->descricao}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                 <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-btn">
                            <span class="btn btn-outline-light bg-transparent p-0"></span>
                        </span>
                    </div>
                </div>
                <div class="custom-file">
                    <input type="file" name="img" id="img" class="custm-file-input" onchange="this.nextElementSibling.innerText=this.files[0].name">
                    <label for="img" class="custom-class-label">Avatar</label>                
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-info">Enviar</button>
        </div>
    </form>
@endsection