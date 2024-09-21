<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $fillable = ['nome', 'sigla'];

    public function orientadores()
    {
        return $this->hasMany(Orientador::class);
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class);
    }
}

