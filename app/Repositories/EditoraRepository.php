<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Models\Editora;
use App\Models\Livro;

class EditoraRepository {

    public function getTodasEditoras(){
        return Editora::all();
    }

    public function storeEditora(array $data){
        return Editora::create($data);
    }

    public function findEditora(int $id){
        return Editora::findOrFail($id);
    }

    public function updateLivro(int $id, array $data ){
        $editora = $this->find($id);
        $editora = $this->update($data);

        return $editora;
    }

    public function deleteLivro(int $id){
        $editora = $this->find($id);
        $editora->delete();
    }
}