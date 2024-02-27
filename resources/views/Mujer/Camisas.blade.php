@extends('layouts.plantilla')

@section('title','Camisas Mujer')

@section('container');
<div class="Inicio" style="text-align:center"> 
    <h1>Camisas</h1>
</div>

<div class="Main">
    <section>
        <div class="grid-container">
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa1.jpg') }}" alt="Camisa 1">
                <div class="title"> CAMISETA UNIFORME DE LOCAL COLOMBIA 22</div>
                <div class="style"> $ 249.950</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa2.jpg') }}" alt="Camisa 2">
                <div class="title">CAMISETA VISITANTE MILLONARIOS FC 2023</div>
                <div class="style"> $ 299.9500</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa3.jpg') }}" alt="Camisa 3">
                <div class="title">CAMISETA LOCAL INTER MIAMI CF 24/25</div>
                <div class="style"> $ 449.950</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa4.jpg') }}" alt="Camisa 4">
                <div class="title">CAMISETA LOCAL JAMAICA 23</div>
                <div class="style"> $ 172.466</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa5.jpg') }}" alt="Camisa 5">
                <div class="title">FC BARCELONA LOCAL 2023/24 </div>
                <div class="style"> $ 368,415</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa6.jpg') }}" alt="Camisa 6">
                <div class="title">PORTUGAL LOCAL 2022/23 </div>
                <div class="style"> $ 376,338</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>

            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa7.jpg') }}" alt="Camisa 7">
                <div class="title">LIVERPOOL FC LOCAL 2023/24 </div>
                <div class="style"> $ 434.950</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa8.jpg') }}" alt="Camisa 8">
                <div class="title">ORLANDO PRIDE LOCAL STADIUM</div>
                <div class="style"> $ 274.920,
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-dark ">Comprar</button>
                    </div>
                </div>
            </div>
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa10.jpg') }}" alt="Camisa 9">
                <div class="title">NIGERIA LCOAL 2022/23 STADIUM</div>
                <div class="style"> $ 229,764</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
   
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa9.jpg') }}" alt="Camisa 10">
                <div class="title">CAMISETA NIKE DE LLOS MIAMI HEAT- NIKOLA JOVIÇ</div>
                <div class="style"> $ 439.900,00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
            
            
            <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa11.jpg') }}" alt="Camisa 11">
                <div class="title">CAMISETA NIKE  DE HOUSTON ROCKETS </div>
                <div class="style"> $ 436,047.71 </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>

             <div class="card-grilla">
                <img class="imagen-grilla" src="{{ asset('images/Mujeres/Camisas/camisa12.jpg') }}" alt="Camisa 12">
                <div class="title">CAMISETA PORTLAND TRAIL BLAZERS NIKE CITY</div>
                <div class="style"> 403,971.00</div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark ">Comprar</button>
                </div>
            </div>
        </div>
    </section>
</div>
    
@endsection
