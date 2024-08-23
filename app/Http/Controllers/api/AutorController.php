<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\AutorRepository;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    protected $autorRepository;

    public function __construct()
    {
        $this->autorRepository = new AutorRepository();
    }

    public function index(){
        $autor = $this->autorRepository->getTodosAutores();

        return response()->json($autor);
    }
}
