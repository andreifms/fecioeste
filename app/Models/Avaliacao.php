<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $fillable = ['quesito_avaliativo_id', 'nota', 'avaliador_id'];

    public function quesitoAvaliativo()
    {
        return $this->belongsTo(QuesitoAvaliativo::class);
    }

    public function avaliador()
    {
        return $this->belongsTo(Avaliador::class);
    }
}

