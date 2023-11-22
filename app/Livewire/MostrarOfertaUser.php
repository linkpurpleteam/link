<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarOfertaUser extends Component
{
    public $oferta;
    public function render()
    {
        return view('livewire.mostrar-oferta-user');
    }
}
