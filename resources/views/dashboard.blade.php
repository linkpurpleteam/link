@extends('layouts.app')

@section('titulo')
    Tu cuenta Usuario
@endsection

@section('contenido')

        <div class="muro-container">
            <h2 class="title-tu-muro">Bienvenido a tu Muro: {{$user->name}}</h2>
            <livewire:dashboard-vacantes />
        </div>

        
@endsection