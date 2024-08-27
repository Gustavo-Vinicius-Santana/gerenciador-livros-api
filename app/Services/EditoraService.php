<?php

namespace App\Services;

use App\Models\Autor;
use App\Repositories\AutorRepository;
use App\Repositories\LivroRepository;
use App\Repositories\EditoraRepository;
use Illuminate\Database\Eloquent\Collection;

class EditoraService
{
    protected $autorRepository;
    protected $livroRepository;

    public function __construct()
    {
        $this->autorRepository = new AutorRepository();
        $this->livroRepository = new LivroRepository();
        $this->editoraRepository = new EditoraRepository();
    }

    public function findEditoraLivros(int $id){
        $editora = $this->editoraRepository->findEditora($id);
        if($editora === null){
            return ['message' => 'não há editoras com esse id.'];
        }

        $livros = $this->livroRepository->getTodosLivros();
        $livrosEditora = $livros->where('editoras_id', $id);

        return ['editora' => $editora, 'livros' => $livrosEditora];
    }

    public function buscarEditoraNome(string $nome){
        $editoras = $this->editoraRepository->findEditoraNome($nome);

        return ['editoras' => $editoras];
    }
}