<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Models\Editora;
use App\Models\Livro;

class LivroRepository {

    public function getTodosLivros(){
        return Livro::all();
    }

    public function storeLivro(array $data){
        return Livro::create($data);
    }

    public function findLivro(int $id){
        return Livro::findOrFail($id);
    }

    public function updateLivro(int $id, array $data){
        $livro = Livro::find($id);
        $livro->update($data);

        return $livro;
    }

    public function deleteLivro(int $id){
        $livro = Livro::find($id);
        $livro->delete();
    }
}