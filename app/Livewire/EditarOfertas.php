<?php

namespace App\Livewire;

use App\Models\Oferta;
use App\Models\Precio;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class EditarOfertas extends Component
{
    //Atributos
    public $oferta_id;
    public $titulo;
    public $precio;
    public $categoria;
    public $descripcion;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;

    //Requerimientos para el formulario
    protected $rules = [
        'titulo' => 'required|string',
        'precio' => 'required',
        'categoria' => 'required',
        'descripcion' => 'required',
        'imagen_nueva' => 'nullable|image|max:1024',

    ];

    //Metodo mount para recuperar informacion
    public function mount(Oferta $oferta)
    {   
        $this->oferta_id = $oferta->id;
        $this->titulo = $oferta->titulo;
        $this->precio = $oferta->precio_id;
        $this->categoria = $oferta->categoria_id;
        $this->descripcion = $oferta->descripcion;
        $this->imagen = $oferta->imagen;
    }



    public function editarVacante()
    {
        $datos = $this->validate();

        //Si Hay una nueva imagen
        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/ofertas');
            $datos['imagen'] = str_replace('public/ofertas/', '', $imagen);
        }
        //Encontrar la Vacante a editar
        $oferta = Oferta::find($this->oferta_id);
        //Asignar los valores

        $oferta->titulo = $datos['titulo'];
        $oferta->precio_id = $datos['precio'];
        $oferta->categoria_id = $datos['categoria'];
        $oferta->descripcion = $datos['descripcion'];
        $oferta->imagen = $datos['imagen'] ?? $oferta->imagen;

        //Guardar la Vacante
        $oferta->save();
        //Redireccionar

        session()->flash('mensaje', 'La Oferta se Edito Correctamente');
        return redirect()->route('post-prestador.index');

    }
    //renderizado de la pagina
    public function render()
    {   
        
        //Consultar DB
        $precios = Precio::all();
        $categorias = Categoria::all();
        return view('livewire.editar-ofertas', [
            'precios' => $precios,
            'categorias' => $categorias
        ]);
    }
}
