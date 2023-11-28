<?php

namespace App\Livewire;

use App\Models\Oferta;
use App\Notifications\NuevaSolicitud;
use Livewire\Component;

class PostularOferta extends Component
{
    public $oferta;


    public function mount(Oferta $oferta)
    {
      $this->oferta = $oferta;
    }

    public function solicitar()
    {
        //Crear la el solicitante
        $this->oferta->solicitantes()->create([
            'user_id' => auth()->user()->id,
        ]);

        //Crear notificacion 
        $this->oferta->prestador->notify(new NuevaSolicitud($this->oferta->id, $this->oferta->titulo, auth()->user()->id, auth()->user()->numero));
      

        //Mostrar el usuario mensaje de ok
        session()->flash('mensaje', 'Se envio correctamente la solicitud');
        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.postular-oferta');
    }
}
