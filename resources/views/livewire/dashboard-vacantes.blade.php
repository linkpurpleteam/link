<div class="tarjetas-publi-mostrar">
    <livewire:filtrar-ofertas />
    <div class="tarjetas-publi-mostrar">
        @forelse ($ofertas as $oferta )
        <div class="card-mobiles">
            <div class="tarjetas">
                <div class="tarjeta">
                    <div class="frontal">
                        <div class="contenido">
                            <h3>{{$oferta->titulo}}</h3>
                            <p>{{$oferta->descripcion}}</p>
                        </div>
                    </div>
                    <div class="tracero">
                        <div class="contenido">
                            <p>Categoria: {{$oferta->categoria->categoria}}</p>
                            <a href="{{route('oferta.show-user', $oferta->id)}}">
                                <button>Ver Oferta</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        @empty
            <p>No hay Ofertas que Mostrar</p>
        @endforelse
            {{$ofertas->links()}}
    </div>
    <div class="pagination pagination-sm"></div>
</div>
