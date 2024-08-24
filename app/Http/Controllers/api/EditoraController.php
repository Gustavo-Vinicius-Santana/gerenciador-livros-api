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
}
