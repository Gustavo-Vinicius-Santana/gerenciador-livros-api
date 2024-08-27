<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\AutorRepository;
use App\Services\AutorService;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    protected $autorRepository;
    protected $autorService;

    public function __construct()
    {
        $this->autorRepository = new AutorRepository();
        $this->autorService = new AutorService();
    }

    public function index(){
        $autor = $this->autorRepository->getTodosAutores();

        return response()->json($autor);
    }

    public function show($id){
        $autor = $this->autorRepository->findAutor($id);

        return response()->json($autor);
    }

    public function store(Request $request){
        $data = $request->all();
        $autor = $this->autorRepository->storeAutor($data);

        return response()->json($autor, 201);
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $autor = $this->autorRepository->updateAutor($id, $data);

        return response()->json($autor);
    }

    public function destroy($id){
        $this->autorRepository->deleteAutor($id);

        return response()->json(null, 204);
    }

    public function autorLivros($id){
        $autorLivros = $this->autorService->findAutorLivros($id);

        return response()->json($autorLivros);
    }
}
