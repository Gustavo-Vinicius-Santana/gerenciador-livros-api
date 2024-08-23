<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    // Relacionamento "Um para Muitos" (One-to-Many)
    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}
