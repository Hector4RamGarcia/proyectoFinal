<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasteleria</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <header>
      <div style="background-color: #FF9494;">
        <h1 style="color:white; text-align:center;">Pasteleria Los Cariñosos</h1>
      </div>

        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{asset('/')}}">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/producto')}}">Producto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/categoria')}}">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{asset('/cliente')}}">Clientes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{asset('/empleados')}}">Empleados</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{asset('/venta')}}">Ventas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{asset('/detalle')}}">Detalles</a>
                  </li>
              </ul> 
        </nav>
       
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <div class="card" style="text-align: center">
          <div class="card-header bg-black ">
            <h5 style="color: white">Los carinosos 2023</h5>
          </div>
          <div class="card-body">
            <h5 class="card-title">Derechos Reservados.</h5>
            <p class="card-text">Bienvenido a la pasteleria Carinosa</p>
            <a href="/" class="btn" style="background-color: #FF9494; color: white;">Pagina Principal</a>
          </div>
        </div>
    </footer>
    <style>
        .nav-item:hover{
            background-color: #FFD1D1 !important;
        }
        .nav-link,.nav-link:hover{
            color: black !important; 
        }
    </style>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>