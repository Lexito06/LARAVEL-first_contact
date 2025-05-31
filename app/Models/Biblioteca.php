<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase Biblioteca
 *
 * Representa la biblioteca de juegos de un usuario.
 */
class Biblioteca extends Model
{
    use HasFactory;

    protected $table = 'biblioteca';
    public $incrementing = false; // Clave primaria compuesta

    /**
     * Atributos que se pueden asignar
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    /**
     * Atributos que se pueden asignar
     */
    public function juego()
    {
        return $this->belongsTo(Juego::class, 'id_juego');
    }
}
