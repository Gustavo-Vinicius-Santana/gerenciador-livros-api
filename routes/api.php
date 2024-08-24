<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivroController;
use App\Http\Controllers\Api\EditoraController;
use App\Http\Controllers\Api\AutorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('livros', [LivroController::class, 'index']);

Route::get('autores', [AutorController::class, 'index']);

Route::get('editora', [EditoraController::class, 'index']);