@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
<main>
    <div class="baner-video">
      <video class="baner" onloadedmetadata="this .muted=true" autoplay loop style="opacity: 20%;">
          <source src="/imagenes/video-baner-corto.mp4">
        </video> 
    </div>
    <section class="home" id="home">
        <div class="home-contenido">
            <h1 class="primerh1">El portal de <br> soluciones para ti</h1>
            <p>Para disfrutar de nuestro portal crea tu usuario</p>
            <div class="btns">
              <div class="btn-busco-servicio">
                <a href="/register">¿Buscas un servicio?</a>  
              </div>
              <div class="btn-quiero-prestar">
                <a href="/register-prestador">¿Ofreces un servicio?</a>  
              </div>
            </div>
        </div>
    </section>
</main>   

<!--Section servicios-->
<section class="servicio" id="servicio" style="margin-top: 60px;">
  <div class="container-servicios">
    <h2>SERVICIOS</h2>
    <div class="carts">
      <a href="#"><img class="cart"  src="{{asset('imagenes/pintor.png')}}" alt="imagen pintor">Pintor</a>  
      <a href="#"><img class="cart"  src="{{asset('imagenes/Manicurista.png')}}" alt="imagen manicurista">Manicurista</a> 
      <a href="#"><img class="cart"  src="{{asset('imagenes/plomero.png')}}" alt="imagen plomero">Plomero</a>  
    </div>      
    <div class="baner-cuenta-regresiva">
      <h2 class="proximamente">Proximamente más categorías</h2>
      <img class="fondo-chef" src="{{asset('imagenes/chef-fondo.png')}}" alt="imagen chef">
    </div>  
    <!--Cuenta regresiva-->
    <div class="contenedor"> 
    <div class="contenido">
      <div class="contador">
        <div class="responsivo1">
          <div class="cartel">
          <div id="dias">:</div>
          <div class="h3"><h3>Días</h3></div>
        </div>
          <div class="cartel">
          <div id="horas"></div>
          <div class="h3"><h3>Horas</h3></div>
        </div>
        </div>
        <div class="responsivo2">
        <div class="cartel">
          <div id="minutos"></div>
          <div class="h3"><h3>Minutos</h3></div>
        </div>
        <div class="cartel">
          <div id="segundos"></div>
          <div class="h3"><h3>Segundos</h3></div>
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

<!--Section CONTACTO con form-->
<section class="contacto" id="contacto">
    <div class="container-contacto">
        <form class="form-principal-contacto" action="https://formspree.io/f/xoqoklrz" method="POST">
          <h3>¿Tuviste algún inconveniente?</h3>
          <p class="subti-form1">Contacta a nuestro equipo de soporte y atención al cliente</p>
            <div class="mb-3">
                <input type="text"  id="exampleInputName1" placeholder="Escribe aquí tu nombre y apellido" name="nombre">
            </div>
            <div class="mb-3">
                <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email">
                <div id="emailHelp" style="color: white; text-align: center;"></div>
            </div>
            <div class="mb-3">
                <input type="number"  id="exampleInputPassword1" placeholder="Escribe tu número de contacto" name="telefono">
            </div>
            <div class="mb-3">
                <textarea id="exampleFormControlTextarea1"  rows="3" name="mensaje" placeholder="Escribe aquí tus comentarios o motivo de consulta"></textarea>
            </div> 
            <button type="submit" class="btn btn-contacto">Enviar</button>
        </form>   
    </div>     
</section>
@endsection