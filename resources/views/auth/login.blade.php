@extends('layouts.app')

@section('titulo')
    Inicia sesion usuario
@endsection

@section('contenido')
<div class="container-contacto">
    <form class="form-contacto" novalidate method="POST" action="{{route('login')}}">
        <h1>Inicia sesion usuario</h1>
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
        <p>¿No tienes cuenta?<a class="creaCuenta" href="{{route('register')}}">Crear cuenta</a></p>
        <a class="creaCuenta" href="{{route('login-prestador')}}">Si eres prestador inicia sesión aqui</a>
    </form>
</div>
@endsection