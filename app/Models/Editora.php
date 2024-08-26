<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    // Relacionamento "Um para Muitos" (One-to-Many)
    public function livros()
    {
        return $this->hasMany(Livro::class);
    }

    protected $fillable = ['nome'];
}
