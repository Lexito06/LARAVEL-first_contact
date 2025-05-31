<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase Juego
 *
 * Representa un juego en la base de datos.
 */
class Juego extends Model
{
    use HasFactory;

    protected $table = 'juego';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'id_categoria', 'nota'];

    /**
     * Relación con la tabla categorías
     *
     * Un juego pertenece a una categoría.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    /**
     * Relación con la tabla usuarios
     *
     * Un juego puede estar en la biblioteca de muchos usuarios.
     */
    public function bibliotecas()
    {
        return $this->hasMany(Biblioteca::class, 'id_juego');
    }

    /**
     * Relación con la tabla pedidos
     *
     * Un juego puede estar en muchos pedidos.
     */
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_juegos', 'id_juego', 'id_pedido')
                    ->withPivot('precio');
    }

    /**
     * Casts para el atributo timestamp
     */
    protected function casts(): array
    {
        // Como quiero que me devuelva la fecha en el formato de la base de datos
        return [
            'timestamp' => 'datetime',
        ];
    }

    /**
     * Atributo para formatear el nombre del juego
     *
     * Convierte el nombre a minúsculas al guardarlo y lo capitaliza al recuperarlo.
     */
    protected function nombre(): Attribute
    {
        return Attribute::make(
            set: function($valor) {
                return strtolower($valor);
            },
            get: function($valor) {
                return ucfirst($valor);
            }
        );
    }
}
