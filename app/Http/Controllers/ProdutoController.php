<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\CompraProduto;
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

    /**Essa função determinar que só pode acessar as rotas desse controlador se o usuário estiver logado*/
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        /** Exibir a listagem de produtos*/
        $lista=Cliente::get();
        $compra_produtos=CompraProduto::get();
        /** Captar o que o usuário informou na parte de procura */
        $search = request('search');
        if($search){
            /** Analizar se o que foi passado é correspondente ao nome de algum produto */
            $produtos = Produto::where([
                ['nome', 'like', '%'.$search.'%']
            ])->paginate(6); /** Exibir a listagem de todos os produtos de 6 em 6 */
        }else{
            /** Exibir a listagem de todos os produtos de 6 em 6 */
            $produtos = Produto::paginate(6);
        }
        return view('Produtos.lista', ['produtos'=>$produtos, 'search'=>$search], ['clientes'=>$lista], ['compra_produtos'=>$compra_produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /** Redirecionar para a parte de store */
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
        /** Validação se os dados informados são válidos */
        $validation = Validator::make($request->all(),[
            'nome' => 'required|string|max:255',
            'lote' => 'required|string|max:255',
            'estoque' => 'required|numeric',
            'descricao' => 'required|string|max:255',
        ]);
        if($validation->fails()){
            return back()
            ->withErrors($validation)
            ->withInput($request->all());
        }
        /** Pega os dados que o usuário informa no input, por meio do request */
        $nome = $request->post('nome');
        $lote = $request->post('lote');
        $estoque = $request->post('estoque');
        $descricao = $request->post('descricao');
        /** Criar um novo produto */
        $produto = new Produto;
        /** Passa as informações que foram pegas para os atributos do produto */
        $produto->nome=$nome;
        $produto->lote=$lote;
        $produto->estoque = $estoque;
        $produto->descricao = $descricao;
        /** Parte da imagem do cliente */
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $produto->img = $path;
        }
        /** Salvar todas as informações no objeto produto */
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
        /** Mostra um produto com base no id passado */
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
        /** Redirecionar para a função de update */
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
        /** A função update vai atualizar as informações do produto, caso ele tenha informado alguma informação errada */
        /** Pega as informações, por meio do request */
        $nome = $request->post('nome');
        $lote = $request->post('lote');
        $estoque = $request->post('estoque');
        $descricao = $request->post('descricao');
        /** Acessar o produto cujo id foi passado */
        $produto = Produto::find($id);
        /** Troca as antigas informações pelas captadas acima */
        $produto->nome=$nome;
        $produto->lote = $lote;
        $produto->estoque = $estoque;
        $produto->descricao = $descricao;
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $produto->img = $path;
        }
        /** Salvar as informações no objeto produto */
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
        /** Destroi do banco de dados o produto informado */
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->to(route('produtos.index'));
    }
}
