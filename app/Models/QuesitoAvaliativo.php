<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuesitoAvaliativo extends Model
{
    protected $fillable = ['nome'];

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}
