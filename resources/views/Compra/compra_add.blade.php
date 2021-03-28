@extends('layout.inicio')
@section('conteudo')
<!-- Página que lista todas as compras -->
    <h1>Compras</h1>
    <table class="table">
        <thead>
            <tr>
                <td>
                </td>
                <td>
                    <b>Total</b>
                </td>
                <td>
                    <b>Ações</b>
                </td>
            </tr>
        </thead>
        @if(count($compras)>0)
            @foreach($compras as $compra)
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <a href="#"><img src="{{asset('resumo/srtdash/assets/images/Imagem3.png')}}" width="80px" height="80px"></a>
                            </div>
                            <div class="col-8">
                                <p>Código: dfjd95eda6</p>
                                <!-- Lista o dono da compra -->
                                @foreach($clientes as $cliente)
                                    @if($cliente->id === $compra->cliente_id)
                                        <p>Cliente: <b>{{$cliente->nome}}</b></p>
                                    @endif
                                @endforeach
                                <p>Vendido e entregue por <b>CFPP</b></p>
                            </div>
                        </div>                    
                    </td>
                    <td>Total</td>
                    <td>
                        <div class="row">
                            <!-- Chama o modal de edição da compra -->
                            <div class="col-2">
                                <a href="#" type="button" data-toggle="modal" data-target="#editar_compra{{$compra->id}}" class="btn btn-primary text-center">Editar</a>
                            </div>
                            <!-- Excluir uma compra -->
                            <div class="col-2">
                                <form action="{{route('compras.destroy', ['compra'=>$compra->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-secondary">Excluir</button>
                                </form> 
                            </div>
                            <!--  Chama o modal de finalizar compra -->
                            <div class="col-2">
                                <a class="btn btn-danger" href="" type="button" data-toggle="modal" data-target="#finalizar_compra{{$compra->id}}">Finalizar</a> 
                            </div> 
                            <!--  Chama a página de visualizar os produtos da compra -->
                            <div class="col-2">
                                <a href="{{route('compras.show', ['compra'=>$compra->id])}}" class="btn btn-dark">Visualizar</a>
                            </div>  
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

    <!-- Início do modal de edição da compra, no caso editar o cliente a quem a compra pertemce -->
    @foreach($compras as $compra)
    <div class="modal" tabindex="-1" role="dialog" id="editar_compra{{$compra->id}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Informações</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('compras.update', ['compra'=>$compra->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-12">
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
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Fim do modal de edição -->

    <!-- Início do modal de finalizar compra, no caso muda o status da compra para finalizada -->
    @foreach($compras as $compra)
    <div class="modal" tabindex="-1" role="dialog" id="finalizar_compra{{$compra->id}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('compra_produtos.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Finalizar Compra</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Compra finalizada com sucesso</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Finalizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Fim do modal de finalizar compra -->
@endsection