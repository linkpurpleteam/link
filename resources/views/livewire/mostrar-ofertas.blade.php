<div>
    @if (count ($ofertas) > 0)

    @foreach ($ofertas as $oferta )
    <div>
        <a href="{{route('oferta.show', $oferta->id)}}">{{$oferta->titulo}}</a>
        <p>{{$oferta->descripcion}}</p>
    </div>   
    <div>
        <a href="#">Interesados</a>
        <a href="{{route('oferta.edit',$oferta->id)}}">Editar</a>
        <button wire:click="$dispatch('mostrarAlerta', {{$oferta->id}})">
            Eliminar</button>
    </div>
  
    @endforeach


        @else
        <p>No hay ofertas que Mostrar</p>
        @endif
        <div class="livewire-pagination-container pagination">
        {{$ofertas->links()}}
    </div>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', ofertaId =>{
            Swal.fire({
            title: 'Estas Seguro?',
             text: "No puedes regresar una vez se ha eliminado!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminalo!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('eliminarOferta', { oferta : ofertaId})
                    Swal.fire(
                    'Borrado!',
                    'Tu Oferta ha sido Eliminada!.',
                    'success'
                        )
                     }
                })
            })
    </script>
@endpush


