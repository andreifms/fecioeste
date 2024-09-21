<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['nome'];

    public function projetos()
    {
        return $this->hasMany(Projeto::class);
    }

    public function avaliadores()
    {
        return $this->belongsToMany(Avaliador::class, 'avaliador_areas');
    }
}

