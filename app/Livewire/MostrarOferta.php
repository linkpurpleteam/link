<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarOferta extends Component
{

    public $oferta;
    public function render()
    {
        return view('livewire.mostrar-oferta');
    }
}
