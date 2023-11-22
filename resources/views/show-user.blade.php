@extends('layouts.app')

@section('titulo')
    {{$oferta->titulo}}
@endsection

@section('contenido')

  
<div class="container-contacto">
    <div class="container-contacto">
          
        <livewire:mostrar-oferta-user 
        :oferta="$oferta" />
    </div>
 
</div>         

@endsection