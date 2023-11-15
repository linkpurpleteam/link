@extends('layouts.app')

@section('contenido')
<div class="container-contacto">
    <h1>Inicia sesión Usuario</h1>
    <form class="form-contacto" novalidate method="POST" action="{{route('login')}}">
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
<a href="{{route('login-prestador')}}"><button>si eres prestador inicia sesión aqui</button></a>


@endsection