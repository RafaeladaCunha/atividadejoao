<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\GerenciamentoController;


Route::get('/Gerenciamento', [GerenciamentoController::class, 'index']);
Route::post('/Gerenciamento', [GerenciamentoController::class, 'store']);
Route::get('/Gerenciamento/{id}', [GerenciamentoController::class, 'show']);
Route::put('/Gerenciamento/{id}', [GerenciamentoController::class, 'update']);
Route::delete('/Gerenciamento/{id}', [GerenciamentoController::class, 'destroy']);

