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

    public function show($id){
        $id = $request;
        $livro = $this->livroRepository->findLivro($id);

        return response()->json($livro);
    }

    public function store(Request $request){
        $data = $request;
        $livro = $this->livroRepository->store($data);

        return response()->json($livro, 201);
    }

    public function update(Request $request, $id){
        $livro = $this->livroRepository->update($id, $data);

        return response()->json($livro);
    }

    public function destroy($id){
        $this->livroRepository->delete($id);
        return response()->json(null, 204);
    }
}
