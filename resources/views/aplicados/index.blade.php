@extends('layouts.app')

@section('contenido')
<div class="muro-container">
        
    @forelse ($solicitudes as $solicitud)
    <div>
        <h3>{{ $solicitud->oferta->titulo }}</h3>
        <p>Precio: {{ $solicitud->oferta->precio->precio }}</p>
        <p>Prestador: {{$solicitud->oferta->prestador->name}}</p>
        <p>Numero: {{$solicitud->oferta->prestador->numero}}</p>
        <p>Correo: {{$solicitud->oferta->prestador->email}}</p>
    </div>
    @empty
    <p>no hay aplicaciones</p>
@endforelse
<div class="pagination pagination-sm">
    {{$solicitudes->links()}}
    </div>
</div>

@endsection
           