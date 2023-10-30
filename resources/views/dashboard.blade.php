@extends('layouts.app')

@section('titulo')
    Tu cuenta Usuario
@endsection

@section('contenido')

                    <div>
                        <p>{{auth()->user()->name}}</p>
                    </div>
                    <div>
                        <p>{{auth()->user()->email}}</p>
                    </div>

@endsection