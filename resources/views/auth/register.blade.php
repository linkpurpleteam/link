@extends('layouts.app')

@section('titulo')
    Crear Cuenta
@endsection

@section('contenido')
    <div class="container-contacto">
        <form class="form-contacto" action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div>
                <label for="name">Nombre y Apellido:</label>
                <input id="name"
                    name="name"
                    type="text"
                    placeholder="Tu nombre" 
                    value="{{old('name')}}"          
                >
                @error('name')
                <p>{{$message}}</p>
                @enderror                           
            </div>
            <div>
                <label for="direccion">Direccion:</label>
                <input id="direccion"
                    name="direccion"
                    type="text"
                    placeholder="Tu Direccion">
                    @error('direccion')
                    <p>{{$message}}</p>
                    @enderror
            </div>
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
                <label for="numero">Numero de Contacto</label>
                <input id="numero"
                    name="numero"
                    type="text"
                    placeholder="Tu Numero">
                    @error('numero')
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
            <div>
                <label for="password_confirmation">Repetir Password</label>
                <input id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite el Password">
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
            </div>
        </div>
            <input type="submit"
            value="Crear Cuenta">
        </form>
    </div>
@endsection
