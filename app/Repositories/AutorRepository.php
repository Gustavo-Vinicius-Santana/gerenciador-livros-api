<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Models\Editora;
use App\Models\Livro;

class AutorRepository {

    public function getTodosAutores(){
        return Autor::all();
    }

    public function storeAutor(array $data){
        return Autor::create($data);
    }

    public function findAutor(int $id){
        $autor = Autor::find($id);

        if ($autor) {
            return $autor;
        } else {
            return null;
        }
    }

    public function updateAutor(int $id, array $data ){
        $autor = Autor::find($id);
        $autor->update($data);

        return $autor;
    }

    public function deleteAutor(int $id){
        $autor = Autor::find($id);
        $autor->delete();
    }

    public function findAutorNome(string $nome){
        $autores = Autor::where('nome', 'LIKE', '%' . $nome . '%')->get();

        return $autores;
    }
}