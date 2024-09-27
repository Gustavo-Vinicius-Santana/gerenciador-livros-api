<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivroController;
use App\Http\Controllers\Api\EditoraController;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;

// CRUD dos usuarios
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/{id}', [UserController::class, 'destroy']);
    Route::get('/users/userDetail', [UserController::class, 'showWithDetails']);
});


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

Route::get('/editoras/busca', [EditoraController::class, 'buscaEditora']);
