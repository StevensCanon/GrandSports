@extends('layouts.plantilla')

@section('title','Camisas Hombre')

@section('container');
<div class="Inicio" style="text-align:center"> 
    <h1>Camisas</h1>
</div>

<div class="Main">
    <section>
        <div class="grid-container">
            <!-- Tarjeta 1 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa1.jpg') }}" alt="Camisa 1">
                <div class="title"> Camiseta Primera Equipacion Juventus 22/23 de Hombre</div>
                <div class="style"> $ 319.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 2 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa2.jpg') }}" alt="Camisa 2">
                <div class="title">Camiseta Liverpool Nike Away Stadium de Hombre</div>
                <div class="style"> $ 494.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 3 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa3.jpg') }}" alt="Camisa 3">
                <div class="title">Camiseta Brasil Stadium Away Mundial 2022 de Hombre</div>
                <div class="style"> $ 389.900,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 4 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa4.jpg') }}" alt="Camisa 4">
                <div class="title">Equipacion Local Real Madrid 22/23 de Hombre</div>
                <div class="style"> $ 319.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 5 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa5.jpg') }}" alt="Camisa 5">
                <div class="title">Camiseta Adidas Millonarios Fc Home 2023 de Hombre</div>
                <div class="style"> $ 249.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 6 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa6.jpg') }}" alt="Camisa 6">
                <div class="title">Liverpool Fc Local Stadium 22/23 de Hombre</div>
                <div class="style"> $ 534.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>

            <!-- Tarjeta 7 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa7.jpg') }}" alt="Camisa 7">
                <div class="title">Fc Barcelona Stadium Home 23/24 de Hombre</div>
                <div class="style"> $ 524.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 8 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa8.jpg') }}" alt="Camisa 8">
                <div class="title">Psg Df Stad Jsy Ss Hm de Hombre</div>
                <div class="style"> $ 524.950,00
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
            </div>
            
            <!-- Tarjeta 9 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa9.jpg') }}" alt="Camisa 9">
                <div class="title">Camiseta Nike Lebron Jame Lakers Icon Edition 2020</div>
                <div class="style"> $ 339.900,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 10 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa10.jpg') }}" alt="Camisa 10">
                <div class="title">Camiseta Kevin Durant Brooklyn Nets Icon Edition 2022/23 de Hombre</div>
                <div class="style"> $ 664.950,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 11 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa11.jpg') }}" alt="Camisa 11">
                <div class="title">Camiseta Jordan Brand Western Conference All-Star 2024 Swingman</div>
                <div class="style"> $ 436,047.71 </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <!-- Tarjeta 12 -->
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Hombres/Camisas/camisa12.jpg') }}" alt="Camisa 12">
                <div class="title">Camiseta de Grecia Nike Home Swingman de Giannis Antetokounmpo</div>
                <div class="style"> 403,971.00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection



