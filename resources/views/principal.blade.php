@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
    <a href="/register-prestador">Anotate prestador</a>

    <div>
        <h2>Categorias</h2>
        <a href="{{route('electricistas')}}">Electricistas</a>
        <a href="{{route('plomeros')}}">Plomeros</a>
    </div>
@endsection