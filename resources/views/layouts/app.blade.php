<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <title>Link @yield('titulo')</title>
    </head>

    <body>
        <header> 
            <div>
                <h1><a href="/principal">Link</a></h1>

                <nav>
                    @auth
                    <form method="POST" action="{{route('logout-prestador')}}">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                    
                    @endauth

                    @guest

                    <a href="/login">Ingresar</a>
                    @endguest
                    
                    <a href="#">Contacto</a>
                    <a href="#">Sobre Nosotros</a>
                </nav>
            </div>
        </header>
        <main>
            <h2>
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer>
            
            Link - Todos los Derechos Reservados {{now()->year}}

        </footer>
    </body>
</html>
