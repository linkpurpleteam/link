@extends('layouts.app')

@section('titulo')
    Electricistas
@endsection

@section('contenido')
<h2>Nombres de electricistas</h1>
<ul>
    @foreach ($electricistas as $electricista)
    <li>
        {{ $electricista->name }}
    </li>
    @endforeach
</ul>

@endsection