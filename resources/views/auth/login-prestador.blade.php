@extends('layouts.app')

@section('titulo')
    Inicia Sesion en Link Prestador
@endsection

@section('contenido')
<div class="container-contacto">
    <form class="form-contacto-prestador" novalidate method="POST" action="{{route('login-prestador')}}">
        <h1>Inicia sesion como prestador</h1>
        @csrf
            <p>
                {{session('mensaje')}}
            </p>
        @if(session('mensaje'))

        @endif
        <div>
            <input id="email"
                name="email"
                type="email"
                placeholder="Tu Correo">
                @error('email')
                <p>{{$message}}</p>
                @enderror
        </div>
        <div>
            <input id="password"
                name="password"
                type="password"
                placeholder="Password de Registro">
                @error('password')
                <p>{{$message}}</p>
                @enderror
        </div>
        <input class="btn btn-contacto" type="submit"
        value="Ingresar"> 
        <p>No tienes cuenta prestador?<a class="noCuenta" href="{{route('register-prestador')}}">Crear cuenta</a></p>
    </form>
</div>

@endsection