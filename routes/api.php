<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivroController;
use app\Http\Controllers\api\EditoraController;
use app\Http\Controllers\api\AutorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('livros', [LivroController::class, 'index']);
