<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $fillable = ['fecha_compra', 'id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function juegos()
    {
        return $this->belongsToMany(Juego::class, 'pedido_juegos', 'id_pedido', 'id_juego')
                    ->withPivot('precio_unitario');
    }
}
