<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de hola mundo</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- This is our web page menu --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        {{-- This is our Brand (logo) --}}
        <a class="navbar-brand" href="#">Icono</a>
        
        {{-- This button help us to make our navbar responsive --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Here is our links our web page --}}
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agendar Llamada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
            </ul>

            <button class="btn btn-outline-success">
                MIEMBROS
            </button>
        </div>
    </nav>

    {{-- This is the first part of our site --}}
    <div class="container-fluid mt-5">
        <div class="row align-items-center">
            <div class="col-7">
                <h1 class="text-center">The best way to xyz on abc with your friends!</h1>
                <p class="text-center text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta atque labore corrupti reiciendis,
                    cumque maiores eius unde iste qui doloribus aliquid vero exercitationem necessitatibus dolor enim a modi 
                    fugit minima!
                    
                </p>
            </div>
            <div class="col-5">
                <img src="{{asset('images/fotoPerfil.jpg')}}" class="rounded img-fluid" alt="imagen_prueba_perfil">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2">
                <button class="btn btn-outline-success">
                    INSCRÍBETE AHORA
                </button>
            </div>
        </div>
    </div>

    {{-- This is the part of the single payment method --}}
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Método de pago</h1>
            </div>
            {{-- imagen de master card y de visa(metodos de pago) --}}
            <div class="card-body px-5">
                <form action="#">
                    {{-- Name of the client --}}
                    <div  class="form-group row">
                        <div class="col-sm-2 col-form-label">
                            <label for="">Nombre del titular</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del titular de la tarjeta"> 
                        </div>
                    </div>
                    {{-- Credit card --}}
                    <div class="form-group row">
                        {{-- Number of the credit card --}}
                        <div class="col-sm-2 col-form-label">
                            <label for="">Número de tarjeta</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control text-center" placeholder="Número de su tarjeta">
                        </div>
                        {{-- CVV --}}
                        <div class="col-sm-1 col-form-label">
                            <label for="">CVV</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-center" placeholder="CVV">
                        </div>
                        {{-- Vencimiento --}}
                        <div class="col-sm-1 col-form-label">
                            <label for="">Vence</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control text-center" placeholder="MM/AA">
                        </div>
                    </div>
                    
                    <div class="row mt-3 justify-content-end">
                        <div class="col-2">
                            <button class="btn btn-primary">PAGAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    {{-- End of the single payment method --}}

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>