<header class="header">
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
</header>