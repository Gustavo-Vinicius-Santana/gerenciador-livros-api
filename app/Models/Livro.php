<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    // Relacionamento "Pertence a" (Belongs to) com o Autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    // Relacionamento "Pertence a" (Belongs to) com a Editora
    public function editora()
    {
        return $this->belongsTo(Editora::class);
    }

    protected $fillable = ['titulo', 'resumo', 'ano_lancamento', 'autores_id', 'editoras_id'];
    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'data_lancamento' => 'date'
    ];
}
