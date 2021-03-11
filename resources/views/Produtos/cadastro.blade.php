@extends('layout.inicio')
@section('conteudo')
    <h1>Cadastro de Produtos</h1>
    <hr>
    <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="form-group col-6">
                <label>Lote</label>
                <input class="form-control" type="text" name="lote">
            </div>
        </div>
    	<div class="row">
            <div class="form-group col-6">
                <label>Estoque</label>
                <input class="form-control" type="text" name="estoque">
            </div>
            <div class="form-group col-6">
                <label>Valor</label>
                <input class="form-control" type="text" name="valor_unidade">
            </div> 
        </div>
    	<div class="form-group">
    		<label>Descrição</label>
    		<input class="form-control" type="text" name="descricao">
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