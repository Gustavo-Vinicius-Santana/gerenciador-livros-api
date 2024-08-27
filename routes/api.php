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

Route::get('/livro/livroDetail/{id}', [LivroController::class, 'livroDetail']);

Route::get('/livros/busca', [LivroController::class, 'buscaLivro']);


// CRUD do autor
Route::apiResource('/autor', AutorController::class);

Route::get('/autor/autorLivros/{id}', [AutorController::class, 'autorLivros']);

Route::get('/autores/busca', [AutorController::class, 'buscaAutor']);


// CRUD da editora
Route::apiResource('/editora', EditoraController::class);

Route::get('/editora/editoraLivros/{id}', [EditoraController::class, 'editoraLivros']);
