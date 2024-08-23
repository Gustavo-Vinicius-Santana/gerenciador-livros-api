<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Models\Editora;
use App\Models\Livro;

class AutorRepository {

    public function getTodosAutores(){
        return Autor::all();
    }
}