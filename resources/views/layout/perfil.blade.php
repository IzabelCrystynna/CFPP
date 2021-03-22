@extends('layout.inicio')
@section('conteudo')
    <h1>Perfil do Funcionário</h1>
    <hr>
    <div class="row">
    	<div class="col-4">
    		<h4>Imagem do Funcionário</h4>
    	</div>
    	<div class="col-4">
            <div class="card">
                <h4>Dados</h4>
                <div class="card-body">
                    <div class="timeline-area">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Nome</h4>
                                <span class="time"><i class="ti-time"></i>{{Auth::user()->created_at}}</span>
                            </div>
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Email</h4>
                            </div>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>         
    	</div>
        <div class="col-4">
            <h4>Rankign</h4>
        </div>
    </div>
@endsection

