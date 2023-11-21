<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link rel="icon" href="imagenes/favicon.ico">
        <title>Link @yield('titulo')</title>
        @livewireStyles
    </head>
    <body>
        @auth('prestador')
            @include('layouts.navbar.prestador')
        @endauth
        @guest
            @include('layouts.navbar.guest')
        @endguest
            
            <main class="container-contacto">
               @yield('contenido-prestador')
            </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @livewireScripts
        @stack('scripts')    
    </body>
</html>