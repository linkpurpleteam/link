@extends('layouts.app')

@section('titulo')
    Plomeros
@endsection

@section('contenido')
<h2>Nombres de Plomeros</h1>
<ul>
    @foreach ($plomeros as $plomeros)
    <li>
        {{ $plomeros->name }}
    </li>
    @endforeach
</ul>

@endsection