<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoJuego extends Model
{
    use HasFactory;

    protected $table = 'pedido_juego';
    public $incrementing = false; // Clave primaria compuesta
}
