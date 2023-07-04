<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;//acrescentei
use App\Models\Gerenciamento;// acrescentei

class GerenciamentoController extends Controller
{

    public function index()//Rota Principal
    {
        return Gerenciamento::all();

    }


    public function store(Request $request)//Envia para a base de dados
    {
        $request->validate([
         'Titulo'=> 'required',
        'Descrição'=> 'required',
        'Status'=> 'required',
    ]);
    return Gerenciamento::create($request->all());
    }


    public function show(string $id)//pesquisar por $id
    {
        return Gerenciamento::findOrfail($id);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Titulo'=> 'required',
           'Descrição'=> 'required',
           'Status'=> 'required',
       ]);
       $gerenciamento= Gerenciamento::findOrfail($id);
       $gerenciamento->update($request->all());
       return response()->json(['*' => 'Tarefa atualizada com sucesso!'], 200);
    }


    public function destroy(string $id)
    {
        $gerenciamento = Gerenciamento::findOrfail($id);
        $gerenciamento->delete();
        return response()->json(['*' => 'Tarefa Excluida com sucesso'], 200);
    }
}
