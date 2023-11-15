@extends('layouts.app')

@section('titulo')
    Tu cuenta Usuario
@endsection

@section('contenido')

                    <div class="container-contacto">
                        <p>{{auth()->user()->name}}</p>
                    </div>
                    <div>
                        <p>{{auth()->user()->email}}</p>
                    </div>

@endsection