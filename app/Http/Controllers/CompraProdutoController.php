<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompraProduto;
use App\Models\Compra;
use App\Models\Produto;
use App\Models\Cliente;

class CompraProdutoController extends Controller
{
	public function index(){
		$produto=Produto::get();
        $clientes = Cliente::get();
        $lista=Compra::get();
        return view('Compra.compra_add', ['compras'=>$lista], ['clientes'=>$clientes]);
	}
	public function create(){
        return view('Compra.compra_add');
        
    }
    public function store(Request $request, $id){
    	$produto = Produto::find($id);
    	$compra_id = $request->id;
    	dd($compra_id);
        $compra_produtos = new CompraProduto;
        $compra_produtos->produto_id=$produto_id;
        $compra_produtos->compra_id=$compra_id;
        $compra_produtos->save();
        return redirect()->to(route('compra_produtos.index'));
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }
}
