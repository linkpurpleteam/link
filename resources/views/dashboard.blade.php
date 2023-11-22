@extends('layouts.app')

@section('titulo')
    Tu cuenta Usuario
@endsection

@section('contenido')

        <div class="muro-container">
            <h2>Bienvenido a tu Muro: {{$user->name}}</h2>
           
            @foreach($ofertas as $oferta)
            <a href="{{route('oferta.show', $oferta->id)}}">{{$oferta->titulo}}</a>
            <p>{{$oferta->descripcion}}</p>
            @endforeach
          
        </div>

        
@endsection