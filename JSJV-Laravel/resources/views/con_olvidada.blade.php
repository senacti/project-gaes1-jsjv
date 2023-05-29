<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>Recuperar Contraseña</title>
</head>
<body>




     <div class="signupFrm">

      <a href="Registro.html" class="imgregistro">
        <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">
      </a>
      

        <form action="form_restablecer_contraseña.html" class="form" id="formulario">
          <h1 class="title">Correo de Recuperacion</h1>
         
    
          <div class="inputContainer">
            <input type="email" class="input" name="correo" id="correo" placeholder="a"required>
            <label for="" class="label">Correo Electronico  </label>
          </div>
    
          
          <input type="submit" class="submitBtn" value="Continuar">
          <!--a href="form_restablecer_contraseña.html"target="_blank" input type="submit" class="submitBtn" value="Continuar" > Continuar </a-->

         
        </form>
      </div>
</body>
<script src="{{ asset('js/contraseñaOlv.js') }}"></script>
</html>