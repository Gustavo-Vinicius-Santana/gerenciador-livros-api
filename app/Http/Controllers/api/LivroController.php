<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\LivroRepository;
use App\Services\LivroService;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    protected $livroRepository;

    public function __construct()
    {

        $this->livroRepository = new LivroRepository();
        $this->livroService = new LivroService();
    }

    public function index(){
        $livros = $this->livroService->getLivros();

        return response()->json($livros);
    }

    public function show($id){
        $livro = $this->livroRepository->findLivro($id);

        return response()->json($livro);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'resumo' => 'nullable|string',
            'autores_id' => 'required|exists:autores,id',
            'editoras_id' => 'required|exists:editoras,id',
        ]);

        $data = $request->all();
        $livro = $this->livroRepository->storeLivro($data);

        return response()->json($livro, 201);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'resumo' => 'nullable|string',
            'autores_id' => 'required|exists:autores,id',
            'editoras_id' => 'required|exists:editoras,id',
        ]);

        $data = $request->all();
        $livro = $this->livroRepository->updateLivro($id, $data);

        return response()->json($livro);
    }

    public function destroy($id){
        $this->livroRepository->deleteLivro($id);
        return response()->json(null, 204);
    }

    public function livroDetail( $id){
        $livroDetail = $this->livroService->getLivroDetail($id);

        return response()->json($livroDetail);
    }

    public function buscaLivro(Request $request){
        $titulo = $request->query('titulo');
        $buscaLivro = $this->livroService->getBuscaLivro($titulo);

        return response()->json($buscaLivro);
    }
}
