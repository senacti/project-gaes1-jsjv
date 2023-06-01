<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--  CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Estilos_Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo_graficas.css') }}">

    <!--  JS -->
    <script src="{{ asset('/js/app.js')}}" defer></script>
    
</head>
<body>

    <header class="menu">
        <div class="cuadrolog">
            <a href="{{ url('Dashboard') }}"><img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo"></a>
            </div>
           
            <nav>
                <a href=""></a>

            </nav>

        
           </div>
           <div class="menuadmin">
            <button>Santiago Godoy</button>
            <img class="fotoad" src="{{ asset('img/Administrador.jpg') }}" alt="fotoad">
            <div class="menuadminl">
            <a href="#">Informacion de empleados</a>
            <a href="#">Informacion personal</a>
            <a href="{{ url ('/Index') }}">Cerrar sesion</a>
            </div>
          </div>             
    </header>
    

    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span><a href="{{url('DashBoard_Ot') }}"> Orden de trabajo</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <span> <a href="{{url('/Dashboard_GE') }}"> Empleado </a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span> <a href="{{url('/Dashboard_GA')}}"> Actividades </a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span> <a href="{{url('/Error404')}}"> Mensajes </a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span> <a href="{{url('/Error500')}}"> Novedades </a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span> <a href="{{url('Dashboard_Inv')}}">Inventarios </a> </span>
            </div>

            <!--div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div-->

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span> <a href="{{url('/Error404')}}">Configuración </a> </span>
            </div>
        </div>
    </div>
    
    <div class="barra de navegacion">
    </div>

    <div class="cuadro1">
        <p>Ingreso</p>
       <div class="menuVen"> 
        <li><a href="#"> Semana</a></li>
        <li><a href="#"> Mes</a></li>
        <li><a href="#"> Año</a></li>
       </div>
        <img src="img/Ventas Anuales.png" alt="Ventas">
    </div>

    <div class="cuadro2">
        <p class="Titulo">Ultimos Pedidos</p>

        <div class="Pedidos">
            <div class="Info">
            <p>Pedido 1</p>
            <p >50.000</p>
            </div>
            <a href="#"> Consultar</a>
            <img src="{{ asset('img/Camas.jpg') }}" alt="">
        </div>

        <div class="Pedidos2">
            <div class="Info">
            <p>Pedido 1</p>
            <p >50.000</p>
            </div>
            <a href="#"> Consultar</a>
            <img src="{{ asset('img/Muebles.jpg') }}" alt="">
        </div>

        <div class="Pedidos3">
            <div class="Info">
            <p>Pedido 1</p>
            <p >50.000</p>
            </div>
            <a href="#"> Consultar</a>
            <img src="{{ asset('img/Ropa.jpg') }}" alt="">
        </div>

        <div class="Pedidos4">
            <div class="Info">
            <p>Pedido 1</p>
            <p >50.000</p>
            </div>
            <a href="#"> Consultar</a>
            <img src="{{ asset('img/Planchado.jpg') }}" alt="">
        </div>   
        
    </div>
    
    <div class="cuadro3">

        <div class="menuGas"> 
            <li><a href="#"> Gastos</a></li>
            <li><a href="#"> Ingresos</a></li>
           </div>
           <div class="fecha">
            <input class="form__input" type="date" >           
           </div>
        <img src="{{ asset('img/Gastos mes.png') }}" alt="Gastos Grafica">

    </div>
    
    <div class="cuadro4">
        <img src="{{ asset('img/Inventario.jpg') }}" alt="Inventario Grafico">
    </div>

</body>
</html>