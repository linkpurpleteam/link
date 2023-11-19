<?php

namespace App\Livewire;

use App\Models\Oferta;
use Livewire\Component;

class MostrarOfertas extends Component
{
    protected $listeners = ['eliminarOferta'];
    public function eliminarOferta(Oferta $oferta )
    {
       
       $oferta->delete();
    }

    //Renderizado de la Pagina
    public function render()
    {
            //Variable de autenticacion con paginacion
            $ofertas = Oferta::where('prestador_id', auth()->user()->id)->paginate(5);

        return view('livewire.mostrar-ofertas', [
            'ofertas' => $ofertas
        ]);
        }
}
