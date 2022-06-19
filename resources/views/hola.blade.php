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

    {{-- This is the part of the video --}}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-5">
                <h1>Video de presentación</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-8 align-item-self-center">
                <video src="" width="700" height="450" controls="true"></video>
            </div>
        </div>
    </div>

    {{-- This is the part of the brief--}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-5">
                <h3>Titulo de la carta que va</h3>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-8">
                <p class="text-justify text-wrap"> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, asperiores ipsa?
                    Minima deserunt hic doloremque tempora soluta, fugiat exercitationem quam rerum possimus perspiciatis atque eligendi 
                    aperiam excepturi, maxime, maiores ipsam?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo veritatis non asperiores aliquam dignissimos veniam,
                    nostrum ex corrupti delectus, eius quo recusandae labore!
                    <br><br>
                    Eveniet optio minus ut dolorem doloribus obcaecati.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A, dicta quia facere, officiis alias excepturi officia laudantium
                    reprehenderit molestiae ipsa magnam cupiditate? Debitis quisquam in, dicta fugit optio culpa illo?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sed nostrum deserunt minima ea reprehenderit obcaecati, 
                    dolorem facere doloribus vel officia cum a omnis culpa provident quaerat blanditiis quod aspernatur.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptatum cupiditate quisquam. Enim hic adipisci eius cumque
                    illum nulla odit tenetur dicta vitae sit, modi voluptatum ea autem officia totam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptas eveniet laudantium incidunt temporibus, vitae, perspiciatis nostrum,
                    consequuntur libero asperiores voluptatem. Quod ea consequatur saepe, sit illum alias ut vel!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias blanditiis ex numquam animi? Distinctio soluta fugiat sunt veritatis odio a.
                    Obcaecati aut impedit culpa odit aspernatur reiciendis hic, sit vel!
                </p>
            </div>
        </div>
    </div>

    {{-- This is the part of the HVCO 1 --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-2">
                <h2>HVCO #1</h2>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                <img src="{{asset('images/fotoPerfil.jpg')}}" alt="img_hvco1" height="300" width="300">
            </div>
            
            <div class="col-3">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti consectetur quo ullam.
                    Sequi quos esse et sunt quam temporibus cum eum reprehenderit nisi maiores, asperiores ullam,
                    velit iste, fuga deleniti?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa vel ab id accusamus similique,
                    nobis dolore illo fugit iste perspiciatis eius mollitia cumque soluta labore non laborum cum.
                </p>
            </div>

            <div class="col-5">
                <form action="#">
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nombre</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="" id="" placeholder="Ingresa tu nombre..." class="form-control text-center">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Correo</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="email" name="" id="" placeholder="Ingresa tu email..." class="form-control text-center">            
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-5">
                            <button class="btn btn-primary">Descargar PDF</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-4">
                <input type="email" name="" id="" placeholder="Ingresa tu email" class="form-control text-center">
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Descargar PDF</button>
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