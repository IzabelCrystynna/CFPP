<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Produto;
use App\Models\CompraProduto;
use Auth;
use DB;

class CompraController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
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
        $cliente_id = $request->post('cliente_id');
        $quantidade = $request->post('quantidade');
        $valor_unidade = $request->post('valor_unidade');

        $compra = Compra::where(['cliente_id'=>$cliente_id, 'finalizado'=>false])->first();

        if (!$compra) {
            $compra = new Compra;
            $compra->cliente_id = $cliente_id;
            $compra->finalizado = false;
            $compra->save();
        }


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
        //$clientes = Cliente::get();
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
        $finalizado=true;
        $cliente_id = $request->post('cliente_id');
        $compra = Compra::find($id);
        if($cliente_id != 0){
            $compra->cliente_id = $cliente_id;
        }
        $compra->finalizado = $finalizado;
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
        $compra = Compra::find($id);
        $compra->delete();
        return redirect()->to(route('compras.index'));
    }
}
