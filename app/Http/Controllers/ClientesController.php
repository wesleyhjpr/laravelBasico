<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Cliente;
use Redirect;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        return view('clientes.lista', ['clientes' => $clientes]);
    }
    public function novo(){
        return view('clientes.formulario');
    }
    public function salvar(Request $request){
        $cliente = new Cliente();
        $cliente = $cliente->create($request->all());
       // \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso');
        
        $request->session()->flash('mensagem_sucesso', 'Cliente cadastrado com sucesso');
        
        return Redirect::to('clientes/novo');
    }
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.formulario', ['cliente' => $cliente]);
    }
    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());
        $request->session()->flash('mensagem_sucesso', 'Cliente atualizado com sucesso');
        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }
    public function deletar($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        $request->session()->flash('mensagem_sucesso', 'Cliente deletado com sucesso');
        return Redirect::to('clientes');
    }
}
