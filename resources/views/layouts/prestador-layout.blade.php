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
        @auth
        <header class="header"> 
            <!--NAVBAR con Bootstrap-->
            <nav class="navbar bg-body-tertiary">
              <img id="logo" src="{{asset('imagenes/logo.png')}}" alt="Logo" width="75" height="40" class="d-inline-block align-text-top">
                  <div class="container-fluid">
                    <a href="{{route('post-prestador.index')}}" class="active d-none d-lg-block">Mis Ofertas</a>
                    <a href="{{route('oferta.create')}}" class="active d-none d-lg-block">Crear Oferta</a>
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
                          <li class="nav-item"><a class="nav-link" href=""{{route('post-prestador.index')}}">Mis Ofertas</a></li>
                          <li class="nav-item"><a class="nav-link" href="/create-prestador">Crear Oferta</a></li>
                          <li class="nav-item">
                              @auth
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <button type="submit" class="btn btn-link">Cerrar Sesión</button>
                              </form>
                              @endauth
                          </li>
                          @guest
                          <li class="nav-item">
                              <a href="/login" class="btn btn-primary">Iniciar Sesión</a>
                          </li>
                          @endguest 
                      </ul>
                  </div>
              </div>
          </nav>  
          </header>
        @endauth
        @guest
             <!--Navbar inicial-->
        <header class="header">
            <nav class="navbar bg-body-primary">
              <a href="/principal"><img id="logo" src="{{asset('imagenes/logo y letra.png')}}" alt="Logo" width="200vh" height="200vh" class="d-inline-block align-text-top"></a>
                  <div class="container-fluid">
                    <a href="/principal" class="active d-none d-lg-block">Home</a>
                    <a href="#servicio" class="active d-none d-lg-block">Servicios</a>
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
                      <a href="/login-prestador"><button class="btn ml-auto active d-none d-lg-block" style="background-color: #2eb4b4; ">Prestador</button></a>
                      <a href="/login"><button class="btn ml-auto active d-none d-lg-block" style="background-color: #2eb4b4;">Usuario</button></a>
                    @endguest
                  <!-- Menú hamburguesa -->
                  <button class="navbar-toggler bg-transparent d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <img class="navbar-toggler-icon" src="imagenes/menu.png">
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav"> 
                          <li class="nav-item"><a class="nav-link" href="/principal">Home</a></li>
                          <li class="nav-item"><a class="nav-link" href="#servicio">Servicios</a></li>
                          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                          <li class="nav-item"><a class="nav-link" href="/login-prestador">Inicio Prestador</a></li>
                          <li class="nav-item"><a class="nav-link" href="/login" >Inicio Usuario</a></li>
                         
                      </ul>
                  </div>
              </div>
          </nav>  
          </header>
        @endguest
            
            <main class="container-contacto">
               @yield('contenido-prestador')
            </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @livewireScripts
        @stack('scripts')    
    </body>
</html>