@extends('layouts.app')

@section('titulo')
    Tu cuenta Usuario
@endsection

@section('contenido')

        <div class="container-contacto">
            <h2>Bienvenido a tu Muro: {{$user->name}}</h2>
        </div>

@endsection