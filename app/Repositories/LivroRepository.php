<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Models\Editora;
use App\Models\Livro;

class LivroRepository {

    public function  getTodosLivros(){
        return Livro::all();
    }
}