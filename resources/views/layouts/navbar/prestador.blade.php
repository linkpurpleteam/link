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