@extends('layouts.app')

@section('titulo')
    Inicia Sesion en RAP
@endsection

@section('contenido')
<div>
    <form novalidate method="POST" action="{{route('login')}}">
        @csrf
            <p>
                {{session('mensaje')}}
            </p>
        @if(session('mensaje'))

        @endif
        <div>
            <label for="email">Email</label>
            <input id="email"
                name="email"
                type="email"
                placeholder="Tu Correo">
                @error('email')
                <p>{{$message}}</p>
                @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password"
                name="password"
                type="password"
                placeholder="Password de Registro">
                @error('password')
                <p>{{$message}}</p>
                @enderror
        </div>
        <input type="submit"
        value="Ingresar">
    </form>
</div>

<a href="{{route('register')}}"><button>No tienes Cuenta? Crear Cuenta</button></a>


@endsection