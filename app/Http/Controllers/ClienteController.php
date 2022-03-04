<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Acrescentei
use App\Models\Cliente; // Acrescentei

class ClienteController extends Controller
{
    public function index() // Rota principal
    {
        return Cliente::all();
    }

    public function store(Request $request) // Enviar para o BD
    {
        $request->validate([
            'cliente' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'tetefone' => 'required',
        ]);

        return Cliente::create($request->all());

    }

    public function show($id) // Pesquisar pelo $id
    {
        return Cliente::findOrfail($id);
    }

}
