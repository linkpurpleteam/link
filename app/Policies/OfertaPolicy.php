<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Oferta;
use App\Models\Prestador;
use Illuminate\Auth\Access\Response;

class OfertaPolicy
{

    public function create(Prestador $prestador)
    { 
        return $prestador;
    }
    
    public function update(Prestador $prestador, Oferta $oferta): bool
    {
        return $prestador->id === $oferta->prestador_id;
    }

    
    
}

