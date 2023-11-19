<form class="form-contacto" wire:submit.prevent='editarVacante'>
    <div>
        <label for="titulo">Titulo Oferta</label>
        <input id="titulo"
            name="titulo"
            type="text"
            wire:model="titulo"
            placeholder="Titulo Oferta">
            @error('titulo')
            {{$message}}
            @enderror
    </div>
    
    <div>
        <label for="precio">Precio por Hora</label>
        <select name="precio" id="precio" wire:model="precio">
            <option>-- Seleccione --</option>
            @foreach ($precios as $precio)
                <option value="{{$precio->id}}">{{$precio->precio}}</option>
            @endforeach
        </select>
        @error('precio')
            {{$message}}
        @enderror
    </div>
    <div>
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria" wire:model="categoria">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        @error('categoria')
            {{$message}}
        @enderror
    </div>
    <div>
        <label for="descripcion">Descripcion de la Oferta</label>
        <textarea name="descripcion" 
        wire:model="descripcion"
        id="descripcion"  
        placeholder="Descripcion de la Oferta...">
        </textarea>
        @error('descripcion')
            {{$message}}
        @enderror
    </div>
    <div>
        <label for="imagen">Imagen</label>
        <input id="imagen"
            name="imagen"
            type="file"
            wire:model="imagen_nueva"
            accept="image/*">
        <div class="imagen-container">
          <label>Imagen Actual</label>
            <img src="{{ asset('storage/ofertas/' . $imagen)  }}" alt="{{'Imagen Vacante' . $titulo}}">
        </div>
        <div class="imagen-container">
            @if ($imagen_nueva)
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}">
            @endif
        </div>
        @error('imagen_nueva')
            {{$message}}
        @enderror
    </div>
    <button class="btn btn-contacto">
        Editar
    </button>
</form>