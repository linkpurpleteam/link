@extends('layouts.prestador-layout')

@section('titulo')
    Solicitantes
@endsection

@section('contenido-prestador')

    <div class="container-contacto">
        
           <h1>Solicitantes</h1>
           <h3>Solicitantes Oferta: {{$oferta->titulo}}</h3>
           <div>
                <ul>
                    
                    @forelse($oferta->solicitantes as $solicitante )
                        <li>
                            <div>
                               <p>
                                {{$solicitante->user->name}}
                               </p>
                               <p>
                                {{$solicitante->user->email}}
                               </p>
                               <p>
                                {{$solicitante->user->numero}}
                               </p>
                               <p>
                                {{$solicitante->created_at->diffForHumans()}}
                               </p>
                            </div>
                            
                        </li>
                  

                    @empty
                    <p>no hay candidatos</p>
                    @endforelse

                </ul>
           </div>
    </div>
@endsection