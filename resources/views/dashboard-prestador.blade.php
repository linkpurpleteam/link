@extends('layouts.prestador-layout')

@section('titulo')
    Crear Oferta
@endsection

@section('contenido-prestador')

<main class="container-contacto">
    <h1>Mostrar Ofertas</h1>
    <livewire:mostrar-ofertas />
    @if (session()->has('mensaje'))
        <div>
            {{session('mensaje')}}
        </div>
    @endif     

@endsection

