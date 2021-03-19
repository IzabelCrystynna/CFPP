@extends('layout.inicio')
@section('conteudo')
    <h1>Editar Compra</h1>
    <hr>
    <form action="{{route('compras.update', ['compra'=>$compra->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
        	<div class="form-group col-6">
        		<label>Cliente</label>
    			<select name="cliente_id" class="form-control">
                    @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endforeach
                </select>
        	</div>
        </div>
        <div class="text-center">
            <button class="btn btn-info">Enviar</button>
        </div>
    </form>
@endsection