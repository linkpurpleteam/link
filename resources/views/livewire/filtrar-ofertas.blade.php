<div>
    <h4 >Buscar y Filtrar Ofertas</h4>

    <div>
        <form
        wire:submit.prevent='leerDatosFormulario'>
            <div>
                <div>
                    <label 
                        for="termino">Término de Búsqueda
                    </label>
                    <input 
                        id="termino"
                        type="text"
                        placeholder="Buscar por Término: ej. diseñador"
                        wire:model="termino"
                    />
                </div>

                <div>
                    <label>Categoría</label>
                    <select wire:model="categoria" >
                        <option>--Seleccione--</option>
            
                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <input 
                    type="submit"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>