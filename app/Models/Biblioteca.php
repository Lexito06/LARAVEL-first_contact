<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;

    protected $table = 'biblioteca';
    public $incrementing = false; // Clave primaria compuesta

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function juego()
    {
        return $this->belongsTo(Juego::class, 'id_juego');
    }
}
