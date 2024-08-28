<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\EditoraRepository;
use App\Services\EditoraService;

class EditoraController extends Controller
{
    protected $autorRepository;
    protected $editoraService;

    public function __construct()
    {
        $this->editoraRepository = new EditoraRepository();
        $this->editoraService = new EditoraService();
    }

    public function index(){
        $editoras = $this->editoraRepository->getTodasEditoras();

        return response()->json($editoras);
    }

    public function show($id){
        $editora = $this->editoraRepository->findEditora($id);

        return response()->json($editora);
    }

    public function store(Request $request){
        $data = $request->all();
        $editora = $this->editoraRepository->storeEditora($data);

        return response()->json($editora, 201);
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $editora = $this->editoraRepository->updateEditora($id, $data);

        return response()->json($editora);
    }

    public function destroy($id){
        $this->editoraRepository->deleteEditora($id);

        return response()->json(null, 204);
    }

    public function editoraLivros($id){
        $editoraLivros = $this->editoraService->findEditoraLivros($id);

        return response()->json($editoraLivros);
    }

    public function buscaEditora(Request $request){
        $nome = $request->query('nome');
        $buscaEditora = $this->editoraService->buscarEditoraNome($nome);

        return $buscaEditora;
    }
}
