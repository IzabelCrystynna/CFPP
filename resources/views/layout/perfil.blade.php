@extends('layout.inicio')
@section('conteudo')
    <h1>Perfil do Funcionário</h1>
    <hr>
    <div class="row">
    	<div class="col-4">
    		<h4>Imagem do Funcionário</h4>
    	</div>
    	<div class="col-4">
    		<h4>Dados</h4>
    		<p>Nome: {{ Auth::user()->name }}</p>
    		<p>Email: {{ Auth::user()->email }}</p>
    	</div>
    	<div class="col-4">
    		<h4>Ranking de Atendimentos</h4>
    	</div>
    </div>
@endsection

