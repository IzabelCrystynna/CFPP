@extends('layout.inicio')
@section('conteudo')
    <h1>Listagem de Clientes</h1>
    <table class="table">
    	<thead>
    		<tr>
    			<td>
    				<b>Nome</b>
    			</td>
    			<td>
    				<b>Rua</b>
    			</td>
    			<td>
    				<b>Número</b>
    			</td>
    			<td>
    				<b>Bairro</b>
    			</td>
    			<td>
    				<b>Cidade</b>
    			</td>
    			<td>
    				<b>UF</b>
    			</td>
    			<td>
    				<b>Telefone</b>
    			</td>
    			<td>
    				<b>Renda</b>
    			</td>
                <td>
                    <b>Ações</b>
                </td>
    		</tr>
    	</thead>
    		@if(count($clientes)>0)
    			@foreach($clientes as $cliente)
	    			<tr>
	    				<td>
                            <a href="{{route('clientes.show', ['cliente'=>$cliente->id])}}">{{$cliente->nome}}</a>
                        </td>
	    				<td>{{$cliente->rua}}</td>
	    				<td>{{$cliente->numero_casa}}</td>
	    				<td>{{$cliente->bairro}}</td>
	    				<td>{{$cliente->cidade}}</td>
	    				<td>{{$cliente->UF}}</td>
	    				<td>{{$cliente->telefone}}</td>
	    				<td>{{$cliente->renda}}</td>
                        <td>
                            <div class="row">
                                <a href="{{route('clientes.edit', ['cliente'=>$cliente->id])}}" class="btn btn-link"><i class="ti-pencil"></i></a>
                                <form action="{{route('clientes.destroy', ['cliente'=>$cliente->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-link bg-transparent">
                                        <i class="ti-trash"></i>   
                                    </button>
                                </form>     
                            </div>
                        </td>
	    			</tr>
    			@endforeach
    		@else
    			<tr>
	    			<td colspan="9" class="text-center">Sem dados no momento</td>
	    		</tr>
    		@endif
    	<tbody>
    	</tbody>
    </table>
    <div class="text-center">
        <a href="{{route('clientes.create')}}" class="btn btn-info">Adicionar Cliente</a>
    </div>
@endsection