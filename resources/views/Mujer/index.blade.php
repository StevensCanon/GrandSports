@extends('layouts.plantilla')

@section('title','Hombre')

@section('container')

<link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <div class="Inicio" style="text-align:center">      

    <h1>¡Bienvenido a nuestra sección de de mujeres!</h1>

    <p>En nuestra tienda, nos enorgullece ofrecer una amplia gama de productos diseñados para satisfacer las necesidades y gustos de mujeres de todas las edades y estilos.
         Desde ropa deportiva hasta accesorios elegantes, estamos aquí para ayudarte a lucir y sentirte lo mejor posible en cualquier ocasión.
        Nuestra colección incluye desde prendas de moda hasta elementos básicos esenciales, garantizando que encuentres exactamente lo que necesitas para complementar 
        tu estilo único y expresar tu personalidad. Sea cual sea tu pasión o actividad, tenemos productos que te acompañarán y te harán sentir segura y cómoda.       
        Explora nuestra selección cuidadosamente curada y déjate inspirar por las últimas tendencias y estilos. Estamos comprometidos a brindarte una experiencia de 
        compra excepcional, con productos de alta calidad y un servicio al cliente excepcional.   
        ¡Esperamos que disfrutes navegando por nuestra tienda y encontrando los productos perfectos para ti!</p>

        <img class="Portada" src="{{ asset('images/Recursos/PortadaM.jpg') }}">

    </div>

    <h2 class="index">Productos que podrian interesarte de nuestra seccion</h2>
        <section>
            <div class="grid-container">
                <div class="card-grilla">
                    <img class="imagen-grilla" src="{{ asset('images/Recursos/leggings.jpg') }}" alt="leggings" >
                    <div class="title"> Leggings Nike Universa</div>
                    <div class="style"> $ 339.950</div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
                
                <div class="card-grilla">
                    <img class="imagen-grilla" src="{{ asset('images/Recursos/calzado.jpg') }}" alt="calzado">
                    <div class="title">Calzado de Basquetbol Giannis Freak 5 ASW</div>
                    <div class="style"> $ 209,957</div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
                
                <div class="card-grilla">
                    <img class="imagen-grilla" src="{{ asset('images/Recursos/sudadera.jpg') }}" alt="sudadera">
                    <div class="title">Sudadera para niñas sst</div>
                    <div class="style"> $ 269.950</div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>

            </div>
        <section>
    </div>
    
@endsection
