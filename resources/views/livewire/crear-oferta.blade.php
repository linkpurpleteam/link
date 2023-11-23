<section class="contenedor-crear-oferta">
    <div class="titulo-publicar">
        <h1>Publicar servicio</h1>
    </div>
    <div class="contenido-formulario-publi">
        <form class="form-publicacion" wire:submit.prevent='crearVacante'>
            <div>
                <label for="titulo">Titulo de publicacion</label>
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

            <div class="descripcion-oferta">
                <label for="descripcion">Descripcion de la publicacion</label>
                <textarea name="descripcion" 
                wire:model="descripcion"
                id="descripcion"  
                placeholder="Descripcion de la Oferta...">
                </textarea>
                @error('descripcion')
                    {{$message}}
                @enderror
            </div>
            <div class="cuadro-vista-imagen">
                <label for="imagen">Imagen</label>
                <input id="imagen"
                    name="imagen"
                    type="file"
                    wire:model="imagen"
                    accept="image/*">
                <div class="imagen-container">
                    @if($imagen)
                        Imagen: 
                        <img src="{{ $imagen->temporaryUrl() }}">
                    @endif
                </div>
                @error('imagen')
                    {{$message}}
                @enderror
            </div>
            <button class="btn btn-contacto">
                Crear 
            </button>
        </form>
    </div>
</section>
