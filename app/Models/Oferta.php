<?php

namespace App\Models;

use App\Models\Precio;
use App\Models\Categoria;
use App\Models\Solicitante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function categoria()
    {
    return $this->belongsTo(Categoria::class);
    }

    public function precio()
    {
    return $this->belongsTo(Precio::class);
    }

    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class)->orderBy('created_at', 'DESC' );
    }
    public function prestador()
    {
        return $this->belongsTo(Prestador::class, 'prestador_id');
    }
}
