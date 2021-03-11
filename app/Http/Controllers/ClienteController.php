<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;
use Storage;
use Auth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista=Cliente::get();
        return view('Clientes.listar_cliente', ['clientes'=>$lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $cliente = new Cliente;
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
        if($request->has('img')){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->putFileAs(
                Auth::user()->id, $file, $filename
            );
            $cliente->img = $path;
        }
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
        $cliente = Cliente::find($id);
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
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->to(route('clientes.index'));
    }
}
