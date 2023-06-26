<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Lavamatic la italiana</title>


</head>
<body>
    <header>
     <a href= " {{ url('/Index') }}" class="logo">
        <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">

     </a>
     <nav>
        <a href=" {{ url ('/Quienes') }}" >¿Quienes somos?</a>
        <a href=" {{ url ('/Catalogo_Servicios_SR') }}" > Servicios </a>
        <a href="{{route('login')}}" > Iniciar Sesion </a>
        
     </nav>

    </header>

     <div class="informacion">

            <h1>BIENVENIDO</h1>
            <p> Somos especialistas en el cuidado de tus prendas </p>

         <button> Mas informacion <img src="{{ asset('icon/bxs-right-arrow-alt.svg') }}" alt=""> </button>

     </div>

     <div class="imagenes">

        <img class="años" src="{{ asset('img/20-negro-png.webp') }}" alt="">
        <img class="foto" src="{{ asset('img/prendas.png') }}" alt="">
        <img class="fondo" src="{{ asset('img/geo.png') }}" alt="">

     </div>

     <div class="iconos">

        <i  class='bx bxl-instagram' ></i>
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-youtube' ></i>


     </div>




</body>
</html>
