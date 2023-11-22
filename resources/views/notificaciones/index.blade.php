@extends('layouts.prestador-layout')

@section('contenido-prestador')
<div class="container-contacto">
    <h2>
        Mis Notificaciones
    </h2>
    @if (count($notificaciones ) > 0)
    @foreach ($notificaciones as $notificacion)
        <div>
            <p>Tienes una nueva solicitud:
                <span>{{$notificacion->data['nombre_oferta']}}</span>
            </p>
            <p>Hace:
                <span>{{$notificacion->created_at->diffForHumans()}}</span>
            </p>
        </div>
        <div>
            <a href="#">Ver Solicitantes</a>
        </div>
    @endforeach
    @else
        <p>no tienes notificaciones</p>
    @endif
    
</div>
    
@endsection