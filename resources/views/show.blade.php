@extends('layouts.prestador-layout')

@section('titulo')
    {{$oferta->titulo}}
@endsection

@section('contenido-prestador')

  
<div class="container-contacto">
    <div class="container-contacto">
        
        <livewire:mostrar-oferta 
        :oferta="$oferta" />
    </div>
 
</div>         

@endsection