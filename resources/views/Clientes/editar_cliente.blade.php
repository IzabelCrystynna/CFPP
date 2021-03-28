@extends('layout.inicio')
@section('conteudo')
<!--Página que editar as informações de um cliente-->
    <h1>Editar Informações</h1>
    <hr>
    <form action="{{route('clientes.update', ['cliente'=>$cliente->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    	<div class="form-group">
    		<label>Nome</label>
    		<input class="form-control" type="text" name="nome" value="{{$cliente->nome}}">
    	</div>
        <div class="row">
            <div class="form-group col-5">
                <label>Rua</label>
                <input class="form-control" type="text" name="rua" value="{{$cliente->rua}}">
            </div>
            <div class="form-group col-2">
                <label>N°</label>
                <input class="form-control" type="text" name="numero_casa" value="{{$cliente->numero_casa}}">
            </div>
            <div class="form-group col-5">
                <label>Bairro</label>
                <input class="form-control" type="text" name="bairro" value="{{$cliente->bairro}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label>Cidade</label>
                <input class="form-control" type="text" name="cidade" value="{{$cliente->cidade}}">
            </div>
            <div class="form-group col-6">
                <label>UF</label>
                <select name="UF" class="form-control">
                        <option value="0">{{$cliente->UF}}</option>
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
        <div class=row>
            <div class="form-group col-4">
                <label>CPF</label>
                <input class="form-control" type="text" name="CPF" value="{{$cliente->CPF}}">
            </div>
            <div class="form-group col-4">
                <label>Telefone</label>
                <input class="form-control" type="text" name="telefone" value="{{$cliente->telefone}}">
            </div>
            <div class="form-group col-4">
                <label>Renda Mensal</label>
                <input class="form-control" type="text" name="renda" value="{{$cliente->renda}}">
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