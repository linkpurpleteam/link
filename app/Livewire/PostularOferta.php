<?php

namespace App\Livewire;

use Livewire\Component;

class PostularOferta extends Component
{
    public $oferta;


    public function mount($oferta)
    {
      $this->oferta = $oferta;
    }

    public function solicitar()
    {
        //Crear la el solicitante
        $this->oferta->solicitantes()->create([
            'user_id' => auth()->guard('web')->user()->id,

        ]);

        //Crear notificacion y enviar email


        //Mostrar el usuario mensaje de ok
    }


    public function render()
    {
        return view('livewire.postular-oferta');
    }
}
