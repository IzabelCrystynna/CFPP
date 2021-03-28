<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Storage;
use Auth;

class ClienteController extends Controller
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
        /** Exibir a listagem de todos os clientes de 5 em 5 */
        $lista=Cliente::paginate(5);
        return view('Clientes.listar_cliente', ['clientes'=>$lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /** Redirecionar para a parte de store */
        $usuarios = User::get();
        return view('Clientes.cadastrar_cliente', ['usuarios'=>$usuarios]);
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
            'rua' => 'required|string|max:255',
            'numero_casa' => 'required|numeric',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'UF' => 'required|string|max:255',
            'CPF' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'renda' => 'required|numeric',
        ]);
        if($validation->fails()){
            return back()
            ->withErrors($validation)
            ->withInput($request->all());
        }
        /** Pega os dados que o usuário informa no input, por meio do request */
        $nome = $request->post('nome');
        $rua = $request->post('rua');
        $numero_casa = $request->post('numero_casa');
        $bairro = $request->post('bairro');
        $cidade = $request->post('cidade');
        $UF = $request->post('UF');
        $user_id = $request->post('user_id');
        $CPF = $request->post('CPF');
        $telefone = $request->post('telefone');
        $renda = $request->post('renda');
        /** Criar um novo cliente */
        $cliente = new Cliente;
        /** Passa as informações que foram pegas para os atributos do cliente */
        $cliente->nome=$nome;
        $cliente->rua = $rua;
        $cliente->numero_casa = $numero_casa;
        $cliente->bairro = $bairro;
        $cliente->cidade = $cidade;
        $cliente->CPF = $CPF;
        $cliente->telefone = $telefone;
        $cliente->renda = $renda;
        if($user_id != 0){
            $cliente->user_id = $user_id;
        }
        if($user_id != 0){
            $cliente->UF = $UF;
        }
        /** Parte da imagem do cliente */
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $cliente->img = $path;
        }
        /** Salvar todas as informações no objeto cliente */
        $cliente->save();
        return redirect()->to(route('clientes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /** Mostra um cliente com base no id passado */
        $cliente = Cliente::find($id);
        return view('Clientes.visualizar', ['cliente'=>$cliente]);
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
        $usuarios = User::get();
        $cliente = Cliente::find($id);
        return view('Clientes.editar_cliente', ['cliente'=>$cliente], ['usuarios'=>$usuarios]);
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
        /** A função update vai atualizar as informações do cliente, caso ele tenha informado alguma informação errada */
        /** Pega as informações, por meio do request */
        $nome = $request->post('nome');
        $rua = $request->post('rua');
        $numero_casa = $request->post('numero_casa');
        $bairro = $request->post('bairro');
        $cidade = $request->post('cidade');
        $UF = $request->post('UF');
        $user_id = $request->post('user_id');
        $CPF = $request->post('CPF');
        $telefone = $request->post('telefone');
        $renda = $request->post('renda');
        /** Acessar o cliente cujo id foi passado */
        $cliente = Cliente::find($id);
        /** Troca as antigas informações pelas captadas acima */
        $cliente->nome=$nome;
        $cliente->rua = $rua;
        $cliente->numero_casa = $numero_casa;
        $cliente->bairro = $bairro;
        $cliente->cidade = $cidade;
        $cliente->CPF = $CPF;
        $cliente->telefone = $telefone;
        $cliente->renda = $renda;
        if($user_id != 0){
            $cliente->user_id = $user_id;
        }
        if($UF != 0){
            $cliente->UF = $UF;
        }
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $cliente->img = $path;
        }
        /** Salvar as informações no objeto cliente */
        $cliente->save();
        return redirect()->to(route('clientes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /** Destroi do banco de dados o cliente informado */
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->to(route('clientes.index'));
    }
}
