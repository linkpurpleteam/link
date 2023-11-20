<div>
    <div>
        <h3>
            {{$oferta->titulo}}
        </h3>
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
</div>