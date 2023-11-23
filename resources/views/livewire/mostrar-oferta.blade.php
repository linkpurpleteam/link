<section class="contenedor-mostrar-oferta">
    <div class="mostrar-mioferta">
        <h3 class="titulo-oferta-mostrar">
            {{$oferta->titulo}}
        </h3>
        <div class="datos-mostrar-oferta">
            <div>
                <p class="mostrar-oferta-item">
                    Categoria: <span>{{$oferta->categoria->categoria}}</span>
                </p>
                <p class="mostrar-oferta-item">
                    precio por hora: <span>{{$oferta->precio->precio}}</span>
                </p>
            </div>
        </div>
        <div>
            <h2 class="subtitulo-mostrar-oferta">Descripcion del servicio</h2>
            <p>{{$oferta->descripcion}}</p>
        </div>
        <div>
            <div class="imagen-container">
                <img src="{{ asset('storage/ofertas/' . $oferta->imagen)}}" alt="{{'Imagen Vacante' . $oferta->titulo}}">
            </div>
        </div>
        @guest
        <div class="mostrar-oferta-item">
            Deseas Solicitar esta Oferta?<a href="{{ route('register')}}">Obten una cuenta y aplica a esta y otras ofertas</a>
        </div>
        @endguest
    </div>
</section>     