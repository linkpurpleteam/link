@extends('layouts.prestador-layout')

@section('titulo')
    Editar Oferta
@endsection

@section('contenido-prestador')

  
<div class="container-contacto">
    <div class="container-contacto">
        <h1>Editar Oferta: {{$oferta->titulo}}</h1>
    <livewire:editar-ofertas 
        :oferta="$oferta"/>
    </div>
    <div>
        <p>{{auth()->user()->name}}</p>
    </div>
    <div>
        <p>{{auth()->user()->email}}</p>
    </div>
</div>         

@endsection