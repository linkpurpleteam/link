<header class="header">
    <nav class="navbar bg-body-tertiary">
        <img id="logo" src="{{route('imagenes/logo y letra.png')}}" alt="Logo" width="200vh" height="200vh" class="d-inline-block align-text-top">
            <div class="container-fluid">
            <a href="{{route('post-prestador.index')}}" class="active d-none d-lg-block"><img style="width: 25%; height: auto;" src="{{route('imagenes/logomiperfil.png')}}" alt="logomiperfil">&#160;Mi perfil</a>
            <a href="{{route('oferta.create')}}" class="active d-none d-lg-block">Solicitudes</a>
            @auth
            <a class="active d-none d-lg-block">
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn ml-auto active d-none d-lg-block" style="color:white; border-radius: 13px; border: 1px solid white; background-color: #2eb4b4;" type="submit">Cerrar Sesión</button>
            </form>
            </a>
            @endauth
            @guest
            <a href="/login"><button class="btn ml-auto active d-none d-lg-block" style="color:white; border-radius: 13px; border: 1px solid white; background-color: #2eb4b4;" type="submit">Iniciar Sesión</button></a>
            @endguest
</header>