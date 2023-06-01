<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente No Registrado</title>

    <script src="{{ asset('iccon/buscar.png') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/Estilo_CatalogoServicios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css Boostrap/bootstrap-grid.min.css.map') }}">

</head>
<body>
 
  <!--Barra-->
  <header class="menu">

      <div class="cuadrolog">
      <a href=" {{ url ('/Index') }}"><img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo"></a>
      </div>

      <div class="buscar">
          <input type="text" placeholder="Buscar" required>
          <div class="btn">
             <img class="iccon" src="{{ asset('icon/buscar.png') }}" alt="">
          </div>
      </div>

    <ul class="barra">
      
      <!--Pedidos-->
      <!--div class="Peid">
      <img src="icon/Serivicios.png" alt="Pedidos">
      <li><a href="#">Pedidos</a></li>
      </div-->

    

    </ul>

      <!--Administrador-->
      <div class="admin">
      <img class="UsIcon" src="{{ asset('img/user.svg') }}" alt="UsuarioIcono">

      
      <h2><a href=" {{ url('/Registro') }}" class="Admin">Iniciar sesion</h2></a>
      </div>
      
      <!--Configuraciones-->
      <!--div class="Confi">
      <img src="icon/configuracion.png" alt="Ajustes">
      <li><a href="#">Configuraciones</a></li>
      </div-->

  </header>

 <h1 class="Titulo">Elije un Servicio</h1>

  <!--Vista del catalogo de Servicios-->
  <div class="Catalogo"> 

    <div class="servicio1">
      
      <a href=" {{ url('/Registro') }}">Muebles</a>
      <img src="{{ asset('img/Muebles.jpg') }}" alt="Muebles">
      
    </div>

    <div class="servicio2">

      <a href=" {{ url('/Registro') }}">Lavanderia</a>
      <img src="{{ asset('img/Lavadoras.jpg') }}" alt="Lavanderia">

    </div>

    <div class="servicio3">

      <a href=" {{ url('/Registro') }}">Planchado</a>
      <img src="{{ asset('img/Planchado.jpg') }}" alt="Secado">

    </div>

    <div class="servicio4">

      <a href=" {{ url('/Registro') }}">Tintoreria</a>
      <img src="{{ asset('img/Tintoreria.jpg') }}" alt="Tintoreria">

    </div>

    <div class="servicio5">

      <a href=" {{ url('/Registro?) }}">Zapatos</a>
      <img src="{{ asset('img/Zapatos.jpg') }}" alt="Calzado">
      

    </div>

    <div class="servicio6">

      <a href=" {{ url('/Registro') }}">Tapetes</a>
      <img src="{{ asset('img/Tapete.jpg') }}" alt="Tapetes">

    </div>

  </div>


</body>
</html>