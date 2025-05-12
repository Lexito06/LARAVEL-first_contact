<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $table = 'juego';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'id_categoria'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function bibliotecas()
    {
        return $this->hasMany(Biblioteca::class, 'id_juego');
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_juegos', 'id_juego', 'id_pedido')
                    ->withPivot('precio_unitario');
    }
    protected function casts(): array
    {
        // Como quiero que me devuelva la fecha en el formato de la base de datos
        return [
            'timestamp' => 'datetime',
        ];
    }

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
