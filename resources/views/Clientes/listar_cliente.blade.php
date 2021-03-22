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
                    @can('lista',$cliente)
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
                                    <a href="{{route('clientes.edit', ['cliente'=>$cliente->id])}}" class="btn btn-link"><i class="fa fa-pencil"></i></a>
                                    <form action="{{route('clientes.destroy', ['cliente'=>$cliente->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-link bg-transparent">
                                            <i class="fa fa-trash"></i>   
                                        </button>
                                    </form>     
                                </div>
                            </td>
    	    			</tr>
                    @endcan
    			@endforeach
    		@else
    			<tr>
	    			<td colspan="9" class="text-center">Sem dados no momento</td>
	    		</tr>
    		@endif
    	<tbody>
    	</tbody>
    </table>
    <div class="pull-right mt-0">
        {{$clientes->links('vendor/pagination/bootstrap-4')}}    
    </div>
    <div class="text-center mt-5">
        <a href="{{route('clientes.create')}}" class="btn btn-info">Adicionar Cliente</a>
    </div>
@endsection