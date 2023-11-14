<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio_id',
        'categoria_id',
        'descripcion',
        'imagen',
        'prestador_id'
    ];
}
