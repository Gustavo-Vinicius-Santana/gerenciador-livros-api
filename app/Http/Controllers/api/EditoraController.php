<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\EditoraRepository;

class EditoraController extends Controller
{
    protected $autorRepository;

    public function __construct()
    {
        $this->editoraRepository = new EditoraRepository();
    }

    public function index(){
        $editoras = $this->editoraRepository->getTodasEditoras();

        return response()->json($editoras);
    }

    public function show($id){
        $editora = $this->editoraRepository->finEditora($id);

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
        $this->editoraRepository->delete($id);

        return response()->json(null, 204);
    }
}
