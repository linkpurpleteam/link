@extends('layouts.app')

@section('titulo')
    Crear cuenta como usuario
@endsection

@section('contenido')
    <div class="container-contacto">
        <form class="form-contacto" action="{{route('register')}}" method="POST" novalidate>
            <h1>Crear cuenta como usuario</h1>
            @csrf
            <div>
                <input id="name"
                    name="name"
                    type="text"
                    placeholder="Tu nombre" 
                    value="{{old('name')}}">
                @error('name')
                <p>{{$message}}</p>
                @enderror                           
            </div>
            <div>
                <input id="direccion"
                    name="direccion"
                    type="text"
                    placeholder="Tu Direccion">
                    @error('direccion')
                    <p>{{$message}}</p>
                    @enderror
            </div>
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
                <input id="numero"
                    name="numero"
                    type="text"
                    placeholder="Tu Numero">
                    @error('numero')
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
            <div>
                <input id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite el Password">
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
            </div>
            <input class="btn btn-contacto" type="submit"
            value="Crear Cuenta">
        </form>
    </div>
@endsection
