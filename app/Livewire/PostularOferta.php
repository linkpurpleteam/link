<?php

namespace App\Livewire;

use App\Models\Oferta;
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

        //Crear notificacion y enviar email
        session()->flash('mensaje', 'Se envio correctamente la solicitud');
        return redirect()->back();

        //Mostrar el usuario mensaje de ok
    }


    public function render()
    {
        return view('livewire.postular-oferta');
    }
}
