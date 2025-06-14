<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase Rol
 *
 * Representa los roles de los usuarios
 */
class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';
    protected $fillable = ['nombre'];
}
