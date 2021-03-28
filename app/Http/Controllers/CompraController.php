<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Produto;
use App\Models\CompraProduto;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;

class CompraController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**Essa função determinar que só pode acessar as rotas desse controlador se o usuário estiver logado*/
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        /** Exibir a listagem de compras*/
        $produtos=Produto::get();
        $clientes = Cliente::get();
        $lista=Compra::get();
        return view('Compra.compra_add', ['compras'=>$lista], ['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /** Redirecionar para a parte de store */
        $clientes = Cliente::get();
        return view('Compra.compra_add', ['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produto $produto)
    {
        /** Validação se os dados informados são válidos */
        $validation = Validator::make($request->all(),[
            'valor_unidade' => 'required|numeric',
            'quantidade' => 'required|numeric',
        ]);
        if($validation->fails()){
            return back()
            ->withErrors($validation)
            ->withInput($request->all());
        }
        /** Pega os dados que o usuário informa no input, por meio do request */
        $cliente_id = $request->post('cliente_id');
        $quantidade = $request->post('quantidade');
        $valor_unidade = $request->post('valor_unidade');

        $compra = Compra::where(['cliente_id'=>$cliente_id, 'finalizado'=>false])->first(); /** retorna o primeiro elemento */
        /** Se a compra ainda não existe, entrar no if e criar uma nova compra com os dados passados pelo request */
        if (!$compra) {
            $compra = new Compra;
            $compra->cliente_id = $cliente_id;
            $compra->finalizado = false;
            $compra->save();
        }

        /** Insere na tabela compra_produtos as credencias para que esta seja criada */
        DB::table('compra_produtos')->insert([
            'compra_id' => $compra->id,
            'produto_id'=> $produto->id,
            'valor_unidade' => $valor_unidade,
            'quantidade' => $quantidade
        ]);
        return redirect()->to(route('compras.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        /** Mostra uma compra com base no id passado */
        $produtos = $compra->produtos;
        return view('Compra.compra_visualizar', ['produtos'=>$produtos]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /** Redirecionar para a função de update */
        $clientes = Cliente::get();
        $compra = Compra::find($id);
        return view('Compra.compra_editar', ['compra'=>$compra], ['clientes'=>$clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** A função update vai atualizar as informações doa compra, caso ele tenha informado alguma informação errada */
        /** Pega as informações, por meio do request */
        $finalizado=true;
        $cliente_id = $request->post('cliente_id');
        /** Acessar a compra cujo id foi passado */
        $compra = Compra::find($id);
        /** Se o id do cliente for diferente de 0, vai atualizar o compo cliente_id com o valor passado */
        if($cliente_id != 0){
            $compra->cliente_id = $cliente_id;
        }
        $compra->finalizado = $finalizado;
        /** Salvar as informações no objeto compra */
        $compra->save();
        return redirect()->to(route('compras.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /** Destroi do banco de dados a compra informado */
        $compra = Compra::find($id);
        $compra->delete();
        return redirect()->to(route('compras.index'));
    }
}
