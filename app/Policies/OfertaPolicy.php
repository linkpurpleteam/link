<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Oferta;
use App\Models\Prestador;
use Illuminate\Auth\Access\Response;

class OfertaPolicy
{

    /**
     * Determine whether the user can update the model.
     */
    public function update(Prestador $prestador, Oferta $oferta): bool
    {
        return $prestador->id === $oferta->prestador_id;
    }

    
    
}

