<div>
    <div>
        <form wire:submit.prevent='leerDatosFormulario'>
            <div class="content-busqueda">
                <div>
                    <label 
                        for="termino">Búsca publicaciones recientes
                    </label>
                    <input
                        id="termino"
                        type="text"
                        placeholder="Buscar por Término: ej. diseñador"
                        wire:model="termino"
                    />
                </div>
                <div class="categoria-busqueda">
                    <label>Categoría</label>
                    <select wire:model="categoria" class="categoria-bloq">
                        <option>--Seleccione--</option>
            
                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <input 
                    class="search-bloq"
                    type="submit"
                    value="Buscar"
                    />
                </div>
            </div>
        </form>
    </div>
</div>