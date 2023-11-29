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
                    <button class="btn ml-auto active d-none d-lg-block" style="color:white; border-radius: 13px; border: 1px solid white; background-color: #F57811ff;" type="submit">Cerrar Sesión</button>
                </form>
            </a>
            @endauth
            @guest
            <a href="/login-prestador"><button class="btn ml-auto active d-none d-lg-block" style="background-color: #2eb4b4; ">Prestador</button></a>
            <a href="/login"><button class="btn ml-auto active d-none d-lg-block" style="background-color: #2eb4b4;">Usuario</button></a>
            @endguest
        </div>
<<<<<<< HEAD
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
=======
    </nav>
    <!-- Menú hamburguesa -->
    <nav class="navbar bg-body-primary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <img class="navbar-toggler-icon" src="imagenes/menu.png">
            </button>
            <div class="offcanvas offcanvas-end bg-info" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/principal">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#servicio">Servicios</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Iniciar sesión
                            </a>
                            <ul class="dropdown-menu bg-secondary">
                                <li><a class="dropdown-item" href="/login-prestador">Inicio Prestador</a></li>
                                <li><a class="dropdown-item" href="/login" >Inicio Usuario</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#contacto">Contacto</a></a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
                </div>
            </div>
>>>>>>> 1e276523c336a2eed0c76c4fdc7810962d3074df
        </div>
    </nav>
</header>