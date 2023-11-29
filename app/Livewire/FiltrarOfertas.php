<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Categoria;

class FiltrarOfertas extends Component
{
    public $categoria;
    public $termino;

    public function leerDatosFormulario()
    {
       $this->dispatch('terminosBusqueda', $this->termino, $this->categoria);
    }

    public function render()
    {
       
        $categorias = Categoria::all();

        return view('livewire.filtrar-ofertas', [
            'categorias' => $categorias
        ]);
    }
}
