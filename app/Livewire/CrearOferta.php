<?php

namespace App\Livewire;

use App\Models\Oferta;
use App\Models\Precio;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class CrearOferta extends Component
{
    public $titulo;
    public $precio;
    public $categoria;
    public $descripcion;
    public $imagen;

    use WithFileUploads;



    protected $rules = [
        'titulo' => 'required|string',
        'precio' => 'required',
        'categoria' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024',

    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        //Almacenar la Imagen

        $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);


        //Crear Vacante

        Oferta::create([
            'titulo' => $datos['titulo'],
            'precio_id' => $datos['precio'],
            'categoria_id'=> $datos['categoria'],
            'descripcion'=> $datos['descripcion'],
            'imagen'=> $datos['imagen'],
            'prestador_id' => auth()->user()->id,

        ]);
        //Crear un Mensaje
        session()->flash('mensaje', 'La vacante se publico correctamente');

        //Redireccionar
        return redirect()->route('post-prestador.index');
    }
    public function render()
    {
        //Consultar DB
        $precios = Precio::all();
        $categorias = Categoria::all();
        return view('livewire.crear-oferta',[
            'precios' => $precios,
            'categorias' => $categorias
        ]);
    }
}
