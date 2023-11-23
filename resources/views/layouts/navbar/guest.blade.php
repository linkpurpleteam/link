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