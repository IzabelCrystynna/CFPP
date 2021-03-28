@extends('layout.inicio')
@section('conteudo')
<!-- Página que cadastrar um novo cleinte no banco de dados-->
    <h1>Cadastro de Clientes</h1>
    <hr>
    <form action="{{route('clientes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    	<div class="form-group">
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
        <div class="row">
            <div class="form-group col-5">
                <label>Rua</label>
                <input class="form-control @error('rua') is-invalid @enderror" type="text" name="rua" value="{{old('rua')}}">
                @error('rua')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-2">
                <label>N°</label>
                <input class="form-control @error('numero_casa') is-invalid @enderror" type="text" name="numero_casa" value="{{old('numero_casa')}}">
                @error('numero_casa')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-5">
                <label>Bairro</label>
                <input class="form-control @error('bairro') is-invalid @enderror" type="text" name="bairro">
                @error('bairro')
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
                <label>Cidade</label>
                <input class="form-control @error('cidade') is-invalid @enderror" type="text" name="cidade" value="{{old('cidade')}}">
                @error('cidade')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-6">
                <label>UF</label>
                @error('UF')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
                <select name="UF" class="form-control">
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                <label>CPF</label>
                <input class="form-control @error('CPF') is-invalid @enderror" type="text" name="CPF" value="{{old('CPF')}}">
                @error('CPF')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label>Telefone</label>
                <input class="form-control @error('telefone') is-invalid @enderror" type="text" name="telefone" value="{{old('telefone')}}">
                @error('telefone')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{$message}}
                        </strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
                <label>Renda Mensal</label>
                <input class="form-control @error('renda') is-invalid @enderror" type="text" name="renda" value="{{old('renda')}}">
                @error('renda')
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
                <label>Usuário</label>
                <select name="user_id" class="form-control">
                    <option value="0">Informe o Funcionário</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                    @endforeach
                </select>
            </div>
            <!--Parte no qual cadastrar a foto do cleinte, caso ele deseje-->
            <div class="form-group col-6">
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
                    <label for="img" class="custom-class-label">Avatar</label>
                </div>
            </div>
        </div>
    	<button class="btn btn-info">Enviar</button>
    </form>
@endsection