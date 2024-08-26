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
        return Autor::findOrFail($id);
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
}