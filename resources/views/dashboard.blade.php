@extends('layouts.app')

@section('titulo')
    Tu cuenta Usuario
@endsection

@section('contenido')

        <div class="muro-container">
            <h2>Bienvenido a tu Muro: {{$user->name}}</h2>
        </div>
@endsection