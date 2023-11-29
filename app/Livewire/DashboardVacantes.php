<?php

namespace App\Livewire;

use App\Models\Oferta;
use Livewire\Component;

class DashboardVacantes extends Component

{
    public $categoria;
    public $termino;

    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($termino, $categoria)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
    }

    public function render()
    {
        // $ofertas = Oferta::paginate(5);
        $ofertas = Oferta::when($this->termino, function($query){
            $query->where('titulo', 'LIKE', "%" . $this->termino . "%");
        })
        ->when($this->categoria, function($query){
            $query->where('categoria_id', $this->categoria);
        })
        ->paginate(5);

        return view('livewire.dashboard-vacantes',[
            'ofertas' => $ofertas
        ]);
    }
}
