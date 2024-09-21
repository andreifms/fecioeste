<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['titulo', 'nivel', 'area_id', 'convidado', 'escola_id', 'orientador_id', 'coorientador_id'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function orientador()
    {
        return $this->belongsTo(Orientador::class, 'orientador_id');
    }

    public function coorientador()
    {
        return $this->belongsTo(Orientador::class, 'coorientador_id');
    }
}

