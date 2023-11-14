<div>
    @if (count ($ofertas) > 0)

    @foreach ($ofertas as $oferta )
    <div>
        <a href="">{{$oferta->titulo}}</a>
        <p>{{$oferta->descripcion}}</p>
    </div>   
    <div>
        <a href="#">Interesados</a>
        <a href="#">Editar</a>
        <a href="#">Eliminar</a>
    </div>
  
    @endforeach


@else
<p>No hay ofertas que Mostrar</p>
@endif
<div class="livewire-pagination-container pagination">
    {{$ofertas->links()}}
</div>
</div>


