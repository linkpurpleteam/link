<header class="header"> 
    <!--NAVBAR con Bootstrap-->
    <nav class="navbar bg-body-tertiary">
        <a href="/principal">
            <img id="logo" src="{{asset('imagenes/logo y letra.png')}}" alt="Logo" width="200vh" height="200vh" class="d-inline-block align-text-top">
        </a>
       
        <div class="container-fluid">
            <a href="{{route('post-prestador.index')}}" class="active d-none d-lg-block">Mis publicaciones</a>
            <a href="{{route('oferta.create')}}" class="active d-none d-lg-block">Crear publicacion</a>
            @auth
            <a href="{{route('notificaciones')}}">
                <img src="{{asset('imagenes/campana-notificacion.png')}}" alt=""> {{auth()->user()->unreadNotifications->count()}}
            </a>
            <a class="active d-none d-lg-block">
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn ml-auto active d-none d-lg-block" style="color:white; border-radius: 13px; border: 1px solid white; background-color: #F57811ff;" type="submit">Cerrar Sesión</button>
            </form>
            </a>
            @endauth
            @guest
            <a href="/login"><button class="btn ml-auto active d-none d-lg-block" style="color:white; border-radius: 13px; border: 1px solid white; background-color: #F57811ff;" type="submit">Iniciar Sesión</button></a>
            @endguest
            <!-- Menú hamburguesa -->
            <button class="navbar-toggler bg-transparent d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img class="navbar-toggler-icon"src="imagenes/menu.png">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href=""{{route('post-prestador.index')}}">Mis publicaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="/create-prestador">Crear publicacion</a></li>
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
