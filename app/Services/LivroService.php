<?php

namespace App\Services;

use App\Models\Autor;
use App\Repositories\AutorRepository;
use App\Repositories\LivroRepository;
use App\Repositories\EditoraRepository;
use Illuminate\Database\Eloquent\Collection;

class LivroService
{
    protected $autorRepository;
    protected $livroRepository;
    protected $editoraRepository;

    public function __construct()
    {
        $this->autorRepository = new AutorRepository();
        $this->livroRepository = new LivroRepository();
        $this->editoraRepository = new EditoraRepository();
    }

    public function getLivroDetail($id){
        $livro = $this->livroRepository->findLivro($id);
        if($livro === null){
            return ["message" => "não há livros com esse id."];
        }

        $editora = $this->editoraRepository->findEditora($livro->editoras_id);
        if($editora === null){
            return ["message" => "não há editoras com esse id.", "livro" => $livro];
        }

        $autor = $this->autorRepository->findAutor($livro->autores_id);
        if($autor === null){
            return ["message" => "não há autores com esse id.", "livro" => $livro];
        }

        return ['livro' => $livro, 'editora' => $editora, 'autor' => $autor];
    }

    public function getLivros(){
        $livros = $this->livroRepository->getTodosLivros();

        foreach ($livros as $livro){
            $autor = $this->autorRepository->findAutor($livro->autores_id);
            $editora = $this->editoraRepository->findEditora($livro->editoras_id);

            $autorNome = $autor->nome;
            $editoraNome = $editora->nome;

            $livro->autor = $autorNome;
            $livro->editora = $editoraNome;
        }

        return $livros;
    }

    public function getBuscaLivro(string $titulo){
        $livros = $this->livroRepository->findLivroNome($titulo);

        return ['livros' => $livros];
    }
}