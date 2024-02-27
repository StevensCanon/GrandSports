<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <!--favicon-->
     <!--style-->
     <link href="{{url('css/app.css') }}" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


</head>
<body>
     <!--header-->
     <!--navbar-->
     <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #091318;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="logo" src="{{ asset('images/Inicio/logo2.jpg') }}" alt="Logo">
            </a>
            <a class="navbar-brand" href="#" style="color: white;">GrandSport's</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ url('/') }}"  style="color: white;">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/Hombre') }}" style="color: white;">
                    Hombre  
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('/Hombre/Camisas') }}" style="color: rgb(0, 0, 0);">Camisas</a></li>
                    <li><a class="dropdown-item" href="{{ url('/Hombre/Sudaderas') }}" style="color: rgb(0, 0, 0);">Sudaderas</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/Mujer') }}" style="color: white;">
                    Mujer  
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('/Mujer/Camisas') }}" style="color: rgb(0, 0, 0);">Camisas</a></li>
                    <li><a class="dropdown-item" href="{{ url('/Mujer/Sudaderas') }}" style="color: rgb(0, 0, 0);">Sudaderas</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/Contacto') }}" style="color: white;">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
        
     @yield('container')
     <!--footer-->
     <footer class="text-white" style="background-color: #091318; padding: 20px 0;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Síguenos en</h5>
            <ul class="list-unstyled custom-list-style">
              <li><a href="https://www.facebook.com/" class="text-white"><i class="bi bi-facebook"></i> Facebook</a></li>
              <li><a href="https://twitter.com/home" class="text-white"><i class="bi bi-twitter-x"></i> Twitter</a></li>
              <li><a href="https://www.instagram.com/" class="text-white"><i class="bi bi-instagram"></i> Instagram</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Contactanos</h5>
            <ul class="list-unstyled custom-list-style">
              <li><a href="{{ url('/Contacto') }}" class="text-white"><i class="bi bi-chat-left-text-fill"></i> Contactanos</a></li>
              <li class="text-white"><i class="bi bi-telephone-fill"></i> 31582164XXXX</a></li>
              <li class="text-white"><i class="bi bi-geo-alt-fill"></i> Carrera 10 #45-67 Barrio Primavera Bogotá, Cundinamarca Colombia</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5>Te ayudamos</h5>
            <ul class="list-unstyled custom-list-style">
              <li><a href="#" class="text-white"><i class="bi bi-file-earmark-text-fill"></i> Términos y Condiciones</a></li>
              <li><a href="#" class="text-white"><i class="bi bi-file-text-fill"></i> Política de Privacidad</a></li>
              <li><a href="#" class="text-white"><i class="bi bi-credit-card-fill"></i> Medios de Pago</a></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12 text-center">
            &copy; 2024 Elian Stevens Cañon. Todos los derechos reservados.
          </div>
        </div>
      </div>
    </footer>
    

</body>
</html>
