<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\LivroRepository;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    protected $livroRepository;

    public function __construct()
    {

        $this->livroRepository = new LivroRepository();
    }

    public function index(){
        $livros = $this->livroRepository->getTodosLivros();

        return response()->json($livros);
    }
}
