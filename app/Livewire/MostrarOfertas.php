<?php

namespace App\Livewire;

use App\Models\Oferta;
use Livewire\Component;

class MostrarOfertas extends Component
{
    public function render()
    {
            $ofertas = Oferta::where('prestador_id', auth()->user()->id)->paginate(1);

        return view('livewire.mostrar-ofertas', [
            'ofertas' => $ofertas
        ]);
        }
}
