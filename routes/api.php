<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivroController;
use App\Http\Controllers\Api\EditoraController;
use App\Http\Controllers\Api\AutorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// CRUD dos livros
Route::apiResource('/livro', LivroController::class);

Route::get('/livro/livroAutor/{id}', [LivroController::class, 'livroAutor']);

// CRUD do autor
Route::apiResource('/autor', AutorController::class);

Route::get('/autor/autorLivros/{id}', [AutorController::class, 'autorLivros']);

// CRUD da editora
Route::apiResource('/editora', EditoraController::class);
