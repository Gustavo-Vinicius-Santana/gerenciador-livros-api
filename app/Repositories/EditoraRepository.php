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

    public function updateEditora(int $id, array $data ){
        $editora = Editora::find($id);
        $editora->update($data);

        return $editora;
    }

    public function deleteEditora(int $id){
        $editora = Editora::find($id);
        $editora->delete();
    }
}