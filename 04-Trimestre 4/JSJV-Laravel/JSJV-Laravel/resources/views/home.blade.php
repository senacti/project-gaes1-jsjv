<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Registrado</title>

    <script src="{{ asset('iccon/buscar.png') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css Boostrap/bootstrap-grid.min.css.map') }}">

</head>
<body>
 
<header class="menu">
  <div class="cuadrolog">
    <a href="{{ url('/') }}" style="text-decoration: none;">
      <img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo">
    </a>
  </div>
  <div class="admin">
    <div class="user-info">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-decoration: none; color: white; margin-top: 5px; font-weight: bold;">
  {{ Auth::user()->name }}
</a>

<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
    style="text-decoration: none; color: white; margin-top: 5px;">
    <span onmouseover="this.style.color='black'; this.style.transform='scale(1.1)'; this.style.fontWeight='bold';" onmouseout="this.style.color='white'; this.style.transform='scale(1)'; this.style.fontWeight='normal';">
      {{ __('Cerrar Sesión') }}
    </span>
  </a>
</div>



        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </div>
  </div>
</header>



 <h1 class="Titulo">Elije una opción</h1>

  <!--Vista del catalogo de Servicios-->
  <div class="Catalogo"> 

    <div class="servicio1">
      
      <a href=" {{ route('Crud_actividades.Index') }}">Actividades</a>
      <img src="{{ asset('img/Actividades.jpg') }}" alt="Actividades">
      
    </div>

    <div class="servicio2">

      <a href=" {{ route('crudOT.Index') }}">O.Trabajo</a>
      <img src="{{ asset('img/OT.jpg') }}" alt="Orden de Trabajo">

    </div>

    <div class="servicio3">

      <a href=" {{ route('CRUDsueldo.Index') }}">Sueldo</a>
      <img src="{{ asset('img/Sueldo.jpg') }}" alt="Sueldo">

    </div>

    <div class="servicio4">

      <a href="{{ route('crud.Index') }}">Inventarios</a>
      <img src="{{ asset('img/Tintoreria.jpg') }}" alt="Tintoreria">

    </div>


  </div>


</body>
</html>