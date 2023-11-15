<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link rel="icon" href="imagenes/favicon.ico">
        <title>Link @yield('titulo')</title>
        @livewireStyles
    </head>

    <body>
        <header class="header"> 
          <!--NAVBAR con Bootstrap-->
          <nav class="navbar bg-body-tertiary">
            <img id="logo" src="{{asset('imagenes/logo.png')}}" alt="Logo" width="75" height="40" class="d-inline-block align-text-top">
                <div class="container-fluid">
                  <a href="{{asset('principal')}}"" class="active d-none d-lg-block">Inicio</a>
                  <a href="#servicio" class="active d-none d-lg-block">Categorías</a>
                  <a href="{{route('login-prestador')}}" class="active d-none d-lg-block">Registrar servicio</a>
                  <a href="#contacto" class="active d-none d-lg-block">Contacto</a>
                  @auth
                  <a class="active d-none d-lg-block">
                  <form method="POST" action="{{route('logout')}}">
                      @csrf
                      <button type="submit">Cerrar Sesión</button>
                  </form>
                  </a>
                  @endauth
                  @guest
                  <a href="/login"><button class="btn btn-primary ml-auto active d-none d-lg-block">Iniciar Sesión</button></a>
                  @endguest
                <!-- Menú hamburguesa -->
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img class="navbar-toggler-icon"src="imagenes/menu.png">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Categorías</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Registrar servicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link">Iniciar sesión</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>  
        </header>
        <main>
            @yield('contenido')
        </main>

        <footer>
            <div class="container-footer">
                <div class="logos-footer">
                    <a href="#" target="_blank"><img src="{{asset('imagenes/correo.png')}}"  alt="Email" title="Email"></a>
                    <a href="#" target="_blank"><img src="{{asset('imagenes/facebook.png')}}" alt="Facebook" title="Facebook"></a>
                    <a href="#" target="_blank"><img src="{{asset('imagenes/instagram.png')}}" alt="Instagram" title="Instagram"></a>
                    <a href="#" target="_blank"><img src="{{asset('imagenes/whatsapp.png')}}" alt="Whatsapp" title="Whatsapp"></a>
                    >      
                </div>
                <p>Link - Todos los Derechos Reservados {{now()->year}}</p>
                <p>Ciudad de Buenos Aires, Argentina.</p>
                <a href="#home"><img id="arriba" src="{{asset('imagenes/flecha.png')}}" title="Ir arriba" alt="Flecha"></a>
            </div>
            

        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
