@extends('layouts.plantilla')

@section('title','Inicio')

@section('container');

    <div class="Inicio" style="text-align:center">
         
    <h1>Bienvenido a GrandSport's</h1>

    <p>¡Explora nuestra amplia selección de ropa deportiva para Hombres, Mujeres! En esta sección, en nuestra tienda encontraras
        una variedad de productos de tus equipos y selecciones favoritas. Ya sea que seas fanático del fútbol o baloncesto,
         estamos aquí para ofrecerte lo mejor en calidad y estilo. 
         Descubre camisetas, sudaderas, pantalones deportivos y mucho más, todo diseñado para brindarte comodidad
         y estilo mientras apoyas a tus equipos. ¡No esperes más para lucir los colores de tus equipos favoritos!</p>
    </div>

    <div class="Main">
         <section>
           <h2>Lo más vendido</h2>
           <p>Explora nuestros productos más populares y encuentra las últimas tendencias en moda y estilo.</p>
    
       </section>
       <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/Carousel/barcelona.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/chicago.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/Real Mdrid.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/lakers.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/juventus.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/new york.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/al nassr.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/miami heat.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/inter miami.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/deportiva.jpg') }}" class="my-carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Carousel/deportiva mujer.jpg') }}" class="my-carousel-img" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
      
      <script>
        $(window).on('load', function() {
          $('#myCarousel').carousel({
            interval: 100
          });
        });
      </script>
      
      <div class="Main" style="text-align: justify" >
      <section>
           <h2>Novedades</h2>
           <p>Descubre las últimas adiciones a nuestra colección. ¡Mantente al día con lo último en moda y estilo!</p>
           
           <ul>
            <li>Camiseta Adidas FC Barcelona 2024/25 - Edición Especial con Diseño Retro</li>
            <li>Nike Manchester United Camiseta de Local 2024/25 - Versión Actualizada con Tecnología Dri-FIT</li>
            <li>PUMA Real Madrid Camiseta de Visitante 2024/25 - Color Azul Marino con Detalles en Oro</li>
            <li>Camiseta Nike Los Angeles Lakers NBA 2024/25 - Oficial de la Temporada con Logo en relieve</li>
            <li>Adidas Juventus Camiseta de Local 2024/25 - Diseño Clásico en Blanco y Negro</li>
            <li>Camiseta PUMA New York City FC MLS 2024/25 - Inspirada en el Espíritu Urbano de la Ciudad</li>
            <li>Nike Al Nassr Camiseta de Local 2024/25 - Celebra el Orgullo del Equipo Saudí con un Diseño Elegante</li>
            <li>Camiseta Adidas Miami Heat NBA 2024/25 - Estilo Vibrante para los Fanáticos del Equipo de Florida</li>
            <li>PUMA Inter Miami CF Camiseta de Visitante 2024/25 - Diseño Innovador con Colores Neón</li>
            <li>Camiseta Nike Deportivo de La Coruña 2024/25 - Representa a tu Equipo con Orgullo y Pasión</li>
            <li>Adidas Camiseta Deportiva Mujer 2024/25 - Ideal para Entrenamientos con Tejido Transpirable y Corte Ajustado</li>
        </ul>
       </section>
      </div>
   
      <div class="Main" >
       <section style="text-align: center">
           <h2>Ofertas especiales</h2>
           <p>No te pierdas nuestras ofertas especiales y descuentos exclusivos. ¡Aprovecha estas oportunidades para ahorrar en tus compras favoritas!</p>
           
           <div class="card">
            <img src="{{ asset('images/Inicio/BlackFriday.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">¡Celebra el Black Friday con nosotros! Por tiempo limitado, todos nuestros productos están con un descuento del 35%.¡Corre y haz tu compra antes de que se agoten! Fecha de la promoción: Del 25 de Marzo al 28 de Marzo.</p>
            </div>
            </div>

            <div class="card">
            <img src="{{ asset('images/Inicio/promocion.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"> <p>Compra 3 productos y lleva el tercero a mitad de precio. ¡Aprovecha esta oferta para completar tu colección de artículos deportivos! Fecha de la promoción: del 10 de Mayo al 15 de Mayo de este año.</p></p>
            </div>
            </div>
       </section>
      </div>
   
    
      <div class="Main">
       <section>
           <h2 style="text-align: center">Conoce nuestro cátalogo.</h2>
           <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="cards  mb-3">
                  <h5 class="card-title">SUDADERAS DEPORTIVAS DE FÚTBOL/BASKETBALL</h5>
                  <img src="{{ asset('images/Inicio/sudaderas.jpg') }}" class="card-img-bottom card-img" alt="...">
                  </div>
                </div>
            <div class="col">
                <div class="cards mb-3">
                  <h5 class="card-title">LICRAS PARA MUJERES</h5>
                  <img src="{{ asset('images/Inicio/licras.jpg') }}" class="card-img-bottom card-img" alt="...">
                  </div>
                </div>
            <div class="col">
                <div class="cards mb-3">
                  <h5 class="card-title">PANTALONETAS PARA HOMBRES</h5>
                  <img src="{{ asset('images/Inicio/pantalonetas.jpg') }}" class="card-img-bottom card-img" alt="...">
                  </div>
                </div>
            <div class="col">
              <div class="cards mb-3">
                <h5 class="card-title">CAMISAS DEPORTIVAS DE FÚTBOL/BASKETBALL</h5>
                <img src="{{ asset('images/Inicio/camisas.jpg') }}" class="card-img-bottom card-img" alt="...">
                </div>
              </div>
          </div>
        </section>
      </div>
    </div>
   
@endsection
