<div>
    <livewire:filtrar-ofertas />
    <div>
        <h3>Ofertas Disponibles</h3>
        
        @forelse ($ofertas as $oferta )
            <h3>{{$oferta->titulo}}</h3>
            <p>{{$oferta->descripcion}}</p>
            <p>Categoria: {{$oferta->categoria->categoria}}</p>
            <a href="{{route('oferta.show-user', $oferta->id)}}">
                <button>Ver Oferta</button>
            </a>
        @empty
            <p>No hay Ofertas que Mostrar</p>
        @endforelse
        <div class="pagination pagination-sm">
            {{$ofertas->links()}}
            </div>
    </div>
</div>
