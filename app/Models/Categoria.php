<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase Categoria
 *
 * Representa las categoria de juegos
 */
class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $fillable = ['nombre'];

    /**
     * Relación con la tabla juegos
     *
     * Un juego pertenece a una categoría
     */
    public function juegos()
    {
        return $this->hasMany(Juego::class, 'id_categoria');
    }
}
