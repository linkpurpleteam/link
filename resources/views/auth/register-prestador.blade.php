@extends('layouts.app')

@section('titulo')
    Registrate como prestador
@endsection

@section('contenido')
<div class="container-contacto">
    <form class="form-contacto-prestador" action="{{route('register-prestador')}}" method="POST" novalidate>
        <h1>Registrate como prestador</h1>
        @csrf
        <div>
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
            <input id="edad"
                name="edad"
                type="text"
                placeholder="Tu edad">
                @error('edad')
                <p>{{$message}}</p>
                @enderror
        </div>
        <div>
              <select class="desplega" name="profesion" id="profesion">
                <option value="">--Selecciona una profesion--</option>
                <option value="1">Electricista</option>
                <option value="2" >Plomero</option>
              </select>
                @error('profesion')
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