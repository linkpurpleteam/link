@extends('layouts.prestador-layout')

@section('titulo')
    Crear Oferta
@endsection

@section('contenido-prestador')

    <div class="container-contacto">
        <div class="container-contacto">
            <h1>Publicar Oferta</h1>
        <livewire:crear-oferta />
        </div>
        <div>
            <p>{{auth()->user()->name}}</p>
        </div>
        <div>
            <p>{{auth()->user()->email}}</p>
        </div>
    </div>
                   

@endsection