<header class="header">
    <nav class="navbar bg-body-tertiary">
        <img id="logo" src="{{asset('imagenes/logo y letra.png')}}" alt="Logo" width="200px" class="d-inline-block align-text-top">
        <div class="container-fluid">
        <a href="{{route('post.index')}}" class="active d-none d-lg-block"><img style="width: 25%; height: auto;" src="{{asset('imagenes/logomiperfil.png')}}" alt="logomiperfil">&#160;Mi perfil</a>
        <a href="{{route('aplicados.index')}}" class="active d-none d-lg-block">Solicitudes</a>
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
    </nav>        
</header>