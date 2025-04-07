<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
    ];
    */

    protected $guarded = [
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    // Si acaso falta definir aquí la tabla a la que se quiere conectar y hacer consultas
    // Tomará por defecto la tabla con el nombre de este archivo "Post" pero en minúscula y plural -> "posts"
    // Si acaso se nombra en español, laravel lo pondra en plural pero no en español: Lapiz -> lapizs
    // protected $table = 'posts';

    protected function title(): Attribute
    {
        // Devuelve un atributo que hace que al almacenar el valor en la base de datos, se transforme todo a minúscula
        // y al recuperarlo, se transforme a mayúscula la primera letra
        return Attribute::make(
            set: function($valor) {
                return strtolower($valor);
            },
            get: function($valor) {
                return ucfirst($valor);
            }
        );
    }

    public function getRouteKeyName()
    {
        // Cambia el nombre de la variable que se pasa por la url
        // por defecto es id, pero se puede cambiar por el nombre de la columna que quieras
        // en este caso se cambia por el título
        return 'slug';
    }

}
