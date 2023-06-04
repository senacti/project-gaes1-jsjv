<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>Inicio Sesion</title>
</head>
<body>

    
    
  <!--<header>
      <a href= "Index.html" class="logo">

          <img src="LOGO MORADO LAVAMATIC.png" alt="">
   
       </a>
  </header-->



   <div class="signupFrm">

    <a href=" {{ url ('/Index') }}" class="imgregistro">
      <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">
    </a>
    

      <form action="{{ route('home') }}" id="formulario" class="form" method="post">
                                      @csrf 
        <h1 class="title">Inicio de sesion</h1>
        <div class="inputContainer">
          <input type="email" name="correo" id="correo" class="input" placeholder="a" required>
          <label for="" class="label">Correo</label>
        </div>
  
        <div class="inputContainer">
          <input type="text" class="input"name="usuario" id="usuario" placeholder="a" required>
          <label for="" class="label">Usuario</label>
        </div>
  
        <div class="inputContainer">
          <input type="password" class="input"name="contraseña" id="contraseña" placeholder="a" required>
          <label for="" class="label">Contraseña</label>
        </div>
  
        <!--div class="inputContainer">
          <input type="password" class="input"name="Confirmar" id="Confirmar" placeholder="a" required>
          <label for="" class="label">Confirmar Contraseña</label>
        </div-->

        <br><a href="{{url('/con_olvidada')}}">¿No recuerda su contraseña ?</a><br> 
        <br><a href="{{route('register')}}">Crear Cuenta</a><br>

        <!--input type="submit" href="DashBoard.html "class="submitBtn"value="Entrar"-->
        <!--a href="DashBoard.html" class="submitBtn" > Continuar</a-->

        <button  type="submit" class="submitBtn" value="Continuar">Ingresar</button>
        
       
      </form>
    </div>
    

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
