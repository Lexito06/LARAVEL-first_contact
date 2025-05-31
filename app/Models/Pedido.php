<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase Pedido
 *
 * Representa los pedidos de juegos de un usuario
 */
class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $fillable = ['fecha_compra', 'id_usuario'];

    /**
     * Relación con la tabla usuarios
     *
     * Un pedido pertenece a un usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    /**
     * Relación con la tabla juegos
     *
     * Un pedido se basa en la compra de un juego
     */
    public function juego()
    {
        return $this->belongsTo(Juego::class, 'id_juego');
    }

    /**
     * Relación con la tabla juegos a través de la tabla pivot pedido_juegos
     *
     * Inutilizada ya que ya no se usa la tabla pivot pedido_juegos
     */
    public function juegos()
    {
        return $this->belongsToMany(Juego::class, 'pedido_juegos', 'id_pedido', 'id_juego')
            ->withPivot('precio');
    }

}
