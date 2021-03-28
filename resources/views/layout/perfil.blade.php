@extends('layout.inicio')
@section('conteudo')
<!-- Página de perfil do usuário(funcionário) -->
    <h1>Perfil do Funcionário</h1>
    <hr>
    <div class="row">
        <!-- Dados do funcionário -->
    	<div class="col-6">
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
        <div class="col-6">
            <br>
            <!-- Avatar padrão do funcionário -->
            <p>
                <img src="{{asset('resumo/srtdash/assets/images/avatar_padrao.png')}}" height="200px" width="200px" style="border-radius: 600px">  
            </p>
        </div>
    </div>
@endsection

