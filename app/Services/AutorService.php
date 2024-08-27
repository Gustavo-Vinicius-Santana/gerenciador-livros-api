<?php

namespace App\Services;

use App\Models\Autor;
use App\Repositories\AutorRepository;
use App\Repositories\LivroRepository;
use Illuminate\Database\Eloquent\Collection;

class AutorService
{
    protected $autorRepository;
    protected $livroRepository;

    public function __construct()
    {
        $this->autorRepository = new AutorRepository();
        $this->livroRepository = new LivroRepository();
    }

    public function findAutorLivros(int $id){
        $autor = $this->autorRepository->findAutor($id);
        if($autor === null){
            return ['message' => 'não há autores com esse id.'];
        }

        $livros = $this->livroRepository->getTodosLivros();
        $livrosAutor = $livros->where('autores_id', $id);

        return ['autor' => $autor, 'livros' => $livrosAutor];
    }
}