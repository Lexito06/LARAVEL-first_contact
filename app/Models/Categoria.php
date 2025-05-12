<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $fillable = ['nombre'];

    public function juegos()
    {
        return $this->hasMany(Juego::class, 'id_categoria');
    }
}
