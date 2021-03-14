<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;
use Storage;
use Auth;

class ProdutoController extends Controller
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
        $search = request('search');
        if($search){
            $produtos = Produto::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $produtos = Produto::all();
        }
        return view('Produtos.lista', ['produtos'=>$produtos, 'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Produtos.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'nome' => 'required|string|max:255',
            'lote' => 'required|string|max:255',
            'estoque' => 'required|numeric',
            'valor_unidade' => 'required|numeric',
            'descricao' => 'required|string|max:255',
        ]);
        if($validation->fails()){
            return back()
            ->withErrors($validation)
            ->withInput($request->all());
        }
        $nome = $request->post('nome');
        $lote = $request->post('lote');
        $estoque = $request->post('estoque');
        $valor_unidade = $request->post('valor_unidade');
        $descricao = $request->post('descricao');
        $produto = new Produto;
        $produto->nome=$nome;
        $produto->lote=$lote;
        $produto->estoque = $estoque;
        $produto->valor_unidade=$valor_unidade;
        $produto->descricao = $descricao;
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $produto->img = $path;
        }
        $produto->save();
        return redirect()->to(route('produtos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        return view('Produtos.visualizar', ['produto'=>$produto]);
        $cliente = Cliente::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('Produtos.editar', ['produto'=>$produto]);
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
        $nome = $request->post('nome');
        $lote = $request->post('lote');
        $estoque = $request->post('estoque');
        $valor_unidade = $request->post('valor_unidade');
        $descricao = $request->post('descricao');
        $produto = Produto::find($id);
        $produto->nome=$nome;
        $produto->lote = $lote;
        $produto->estoque = $estoque;
        $produto->valor_unidade = $valor_unidade;
        $produto->descricao = $descricao;
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $produto->img = $path;
        }
        $produto->save();
        return redirect()->to(route('produtos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->to(route('produtos.index'));
    }
}
