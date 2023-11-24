
@extends('layouts.prestador-layout')

@section('contenido-prestador')

<article class="publicacion-servicio">
    <div class="titulo-publicar">
        <h1>Mis notificaciones</h1>

        @if (count($notificaciones ) > 0)
    @foreach ($notificaciones as $notificacion)

    </div>
    <div class="conten-margen-usuario">
        <div class="conten-usuario">
            <div class="miperfil-usuario-notificacion">
                <div class="title-perfil">
                    <h4>Solicitud de servicio</h4>
                </div>
                <p class="dato-usuario">Notificacion:</p>
                <div>
                    <p>Tienes una nueva solicitud:
                        <span>{{$notificacion->data['nombre_oferta']}}</span>
                    </p>
                </div>
                <p class="dato-usuario">Tiempo:</p>
                <div>
                    <p>Hace:
                        <span>{{$notificacion->created_at->diffForHumans()}}</span>
                    </p>
                </div>
                <p class="dato-usuario">Telefono:</p>
                <div>
                    <p>{{auth()->user()->Telefono}}</p>
                </div>
            </div> 
            <div class="ver-notificacion">
                <div class="btn-contacto">
                    <a href="#" >Ver</a>
                </div>  
            </div>
        </div>    
    </div>

    @endforeach
    @else
        <p style="border: 2px solid var(--blanco); padding: 1%; background-color: var(--naranja); color: var(--blanco); ">No tienes notificaciones</p>
    @endif  

</article>

@endsection