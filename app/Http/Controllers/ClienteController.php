<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::with('estado', 'cidade')->get();
        return response()->json($clientes);
    }

    public function show(Cliente $cliente)
    {
        return response()->json($cliente->load('estado', 'cidade')); 
    }

    public function store(ClienteRequest $request){
       
        $cliente = Cliente::create($request->all());
        return response()->json(['message'=> 'Cliente Cadastrado com sucesso', 'cliente' => $cliente], 201);
    }

    public function update(ClienteRequest $request, Cliente $cliente){
        $cliente->update($request->all());
        return response()->json(['message'=> 'Cliente atualizado com sucesso', 'cliente'=> $cliente]);
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return response()->json(['message'=> 'Cliente deletado com sucesso']);
    }
}
