<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/prestador.css')}}">
        <link rel="stylesheet" href="{{asset('css/usuario.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
        <link rel="icon" href="imagenes/logoLink.png">
        <title>Link @yield('titulo')</title>
        @livewireStyles
    </head>

    <body>
        @auth('web')
            @include('layouts.navbar.user')
        @endauth
       @guest
           @include('layouts.navbar.guest')
       @endguest
       
        <main>
            @yield('contenido')
        </main>

        <footer>
            <div class="container-footer">
                <img style="width: 100px; height: auto;" src="{{asset('imagenes/LogoBlanco.png')}}" alt="">
                <a href="#" style="text-decoration: none; color: white;" ><p style="font-size: 20px;">Terminos y <br> condiciones</p></a>
                <div class="logos-footer">
                    <a href="#" target="_blank"><img src="{{asset('imagenes/correo.png')}}"  alt="Email" title="Email"></a>
                    <a href="#" target="_blank"><img src="{{asset('imagenes/facebook.png')}}" alt="Facebook" title="Facebook"></a>
                    <a href="#" target="_blank"><img src="{{asset('imagenes/instagram.png')}}" alt="Instagram" title="Instagram"></a>
                    <a href="#" target="_blank"><img src="{{asset('imagenes/whatsapp.png')}}" alt="Whatsapp" title="Whatsapp"></a>
                          
                </div>
                
                <p style="font-size: 20px;">Ciudad de Buenos Aires <br> Argentina.</p>
                <a href="#home"><img id="arriba" src="{{asset('imagenes/flecha2.png')}}" title="Ir arriba" alt="Flecha"></a>
            </div>
            <p style="background-color: #2eb4b4; text-align: center; margin-bottom: 0%; padding-bottom: 10px;">Link - Todos los Derechos Reservados {{now()->year}}</p>
        </footer> 
        <script src="{{asset('js/app.js')}}"></script>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
