<div>
    <div>
        <h2>
            {{$oferta->titulo}}
        </h2>
        <div>
            <p>
                precio por hora: <span>{{$oferta->precio->precio}}</span>
            </p>
            <p>
                Categoria: <span>{{$oferta->categoria->categoria}}</span>
            </p>
        </div>
    </div>
    <div>
        <div class="imagen-container">
            <img src="{{ asset('storage/ofertas/' . $oferta->imagen)}}" alt="{{'Imagen Vacante' . $oferta->titulo}}">
        </div>
        <div>
            <h2>Descripcion de la Oferta</h2>
            <p>{{$oferta->descripcion}}</p>
        </div>
    </div>


    @guest
        <div>
            Deseas Solicitar esta Oferta?<a href="{{ route('register')}}">Obten una cuenta y aplica a esta y otras ofertas</a>
        </div>
    @endguest
    
    @auth
    <livewire:postular-oferta :oferta="$oferta"/>
    @endauth
    
   
</div>