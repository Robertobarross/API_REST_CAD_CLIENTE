<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/clientes', [ClienteController::class, 'index']); // Rota principal
Route::post('/clientes', [ClienteController::class, 'store']); // Enviar para o Banco de Dados
Route::get('/clientes/{id}', [ClienteController::class, 'show']); // Pesquisar pelo $id