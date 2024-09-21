<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliador extends Model
{
    protected $fillable = ['user_id', 'tipo_avaliador'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'avaliador_areas');
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}

