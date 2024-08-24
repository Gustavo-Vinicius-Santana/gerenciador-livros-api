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

// CRUD do autor
Route::apiResource('/autor', AutorController::class);

// CRUD da editora
Route::apiResource('/editora', EditoraController::class);
