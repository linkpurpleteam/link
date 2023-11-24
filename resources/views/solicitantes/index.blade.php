@extends('layouts.prestador-layout')

@section('titulo')
    Solicitantes
@endsection

@section('contenido-prestador')

    <div class="container-contacto">
        
           <h1>Solicitantes</h1>
           <h3>solicitantes Oferta: {{$oferta->titulo}}</h3>
           <div>
                <ul>
                    @if(count($oferta) > 0)
                    @foreach ($oferta->solicitantes as $solicitante )
                        <li>
                            <div>

                            </div>
                            
                        </li>
                    @endforeach

                    @else
                    <p>no hay candidatos</p>
                    @endif

                </ul>
           </div>
    </div>
@endsection