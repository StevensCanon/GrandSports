@extends('layouts.plantilla')

@section('title','Hombre')

@section('container')

<link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <div class="Inicio" style="text-align:center">  
    <h1>¡Bienvenido a nuestra sección de hombres!</h1>

    <p>En nuestra tienda, encontrarás una amplia selección de productos diseñados especialmente para hombres de todas las edades y tallas.
         Desde ropa deportiva hasta accesorios, estamos aquí para satisfacer todas tus necesidades. Ya seas un deportista dedicado o simplemente
          busques un atuendo cómodo para el día a día, tenemos algo para ti.
        Explora nuestra colección y descubre las últimas tendencias en moda masculina, así como clásicos que nunca pasan de moda. 
        Estamos comprometidos a ofrecerte la mejor calidad y variedad, para que encuentres exactamente lo que estás buscando.      
        ¡Disfruta de tu experiencia de compra con nosotros y no dudes en contactarnos si necesitas ayuda o asesoramiento!</p>
   
        <img class="Portada" src="{{ asset('images/Recursos/PortadaH.jpg') }}">

    </div>

        <h2 class="index">Productos que podrian interesarte de nuestra seccion</h2>
   
        <section>
            <div class="grid-container">
                <div class="card-grilla">
                    <img class="imagen-grilla" src="{{ asset('images/Recursos/guayos.jpg') }}" alt="Guayos" >
                    <div class="title"> GUAYOS X CRAZYFAST.4 MULTITERRENO</div>
                    <div class="style"> $ 339.950</div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
                
                <div class="card-grilla">
                    <img class="imagen-grilla" src="{{ asset('images/Recursos/shorts.jpg') }}" alt="Shorts">
                    <div class="title">SHORTS ADICOLOR CLASSICS 3 RAYAS</div>
                    <div class="style"> $ 209,957</div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
                
                <div class="card-grilla">
                    <img class="imagen-grilla" src="{{ asset('images/Recursos/mochila.jpg') }}" alt="Mochila">
                    <div class="title">MALETA DEPORTIVA ESSENTIALS</div>
                    <div class="style"> $ $169.950</div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
            </div>
        <section>
    </div>

@endsection
