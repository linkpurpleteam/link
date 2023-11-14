@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
<main>
    <section class="home" id="home"  style="background-image: url('{{ asset('imagenes/fondo.jpg')}}');">
        <div class="home-contenido">
            <h1>Bienvenidos a LINK</h1>
            <h3>El portal de soluciones para ti.</h3>
            <p>Ingresá para buscar un servicio o únete a nuestra red profesional.</p>
            <div class="btns">
              <div class="btn-busco-servicio">
                <a href="#contacto">Busco un servicio</a>  
              </div>
              <div class="btn-quiero-prestar">
                <a href="/register-prestador">Quiero prestar un servicio</a>  
              </div>
            </div>
        </div>
    </section>
</main>   

<!--Section CATEGORIA-->
<section class="servicio" id="servicio">
    <div class="container-categoria">
        <h2>CATEGORÍAS DE SERVICIOS</h2>
        <div class="row">
            <!--FILA 1/3: Título -->
            <div class="col-sm-12">       
            </div>
            <!--FILA 2/3: Carousel con Bootstrap-->
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <!--Slide 1-->
                    <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Comunicacion.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 1</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver comunicación</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Construccion.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 2</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver construcción</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Mascotas.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 3</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver mascotas</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <!--Slide 2-->
                  <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Diseño.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 4</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver diseño</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/enfermeria.jpeg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 5</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver enfermeria</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/herramientas-limpieza.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 6</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver limpieza</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <!--Slide 3-->
                  <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Infancia.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 7</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver infancia</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Limpieza.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 8</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver limpieza</a>
                            </div>
                          </div>
                          <div class="card" style="width: 18rem;">
                            <img src="{{asset('imagenes/Mascotas.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card 9</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Ver mascotas</a>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--FILA 3/3: Contenido de la sección de servicios-->
            <div class="col-sm-12">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure omnis labore quasi odit animi nobis? Quas deserunt esse illum, officia alias ullam minima ratione odio vitae rerum voluptatum dicta, debitis ipsum architecto cupiditate vero eos, nobis eaque tempora neque quaerat magni blanditiis. Amet nesciunt error soluta dolorem unde earum repudiandae nam voluptatem aperiam a in provident possimus, quia omnis commodi odit atque ducimus quo blanditiis inventore sunt culpa, obcaecati fuga excepturi! Fugiat beatae magnam sunt aliquid illo eos, qui nulla quas rem incidunt rerum exercitationem eius repellendus porro praesentium dignissimos iste. Aliquid vitae facere vero tenetur. Reprehenderit consectetur ipsam voluptatum.</p>
            </div>
            <div class="col-sm-12 btn-contactame">
                <a href="#">Buscar servicio</a>  
            </div>
        </div>
    </div>
</section>

<!--Section ÚNETE-->
<section class="about" id="about">
    <h2>ÚNETE A NOSOTROS</h2>
    <hr>
    <p class="lead"><strong>L</strong>orem ipsum dolor, sit amet consectetur adipisicing elit. Officia non nobis ex earum unde enim quo assumenda vel dolore iusto minima, mollitia, voluptatem ut? Enim officiis id nobis pariatur similique ex, architecto iure atque omnis. Alias, amet. Dignissimos est id ipsam inventore, quis fuga ratione, autem nihil iure laudantium adipisci nobis! Inventore, sequi et vel earum culpa ratione nihil labore molestiae, sit esse, cumque consectetur omnis vero asperiores aliquam placeat hic quos quasi amet? Distinctio doloremque culpa ipsam illum beatae alias voluptatum impedit provident, ipsum vero aut omnis? Dicta quos at ipsa odit ullam cumque? Hic veritatis corrupti unde error.<br><strong>S</strong>i Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam assumenda culpa reprehenderit corporis mollitia atque vitae doloremque dignissimos veniam odit. <a id="palabra-contactarme" href="/register-prestador">aquí.</a></p>
    <hr>
</section>

<!--Section CONTACTO con form-->
<section class="contacto" id="contacto">
    <div class="container-contacto">
        <h2>CONTACTO</h2>
        <form class="form-contacto" action="https://formspree.io/f/xoqoklrz" method="POST">
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Nombre y apellido</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Escribe aquí tu nombre y apellido" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email">
                <div id="emailHelp" class="form-text">Nunca enviaremos tu correo a nadie más.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Escribe tu número de contacto" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje" placeholder="Escribe aquí tus comentarios o motivo de consulta"></textarea>
            </div> 
            <button type="submit" class="btn btn-contacto">Enviar</button>
        </form>   
    </div>     
</section>
@endsection