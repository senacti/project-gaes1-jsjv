<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>Restablecer contraseña</title>

</head>
<body>
    <!--header>
        <a href= "con_olvidada.html" class="logo">

            <img src="img/LOGO MORADO LAVAMATIC.png" alt="">
     
         </a>
    </header-->



     <div class="signupFrm">

      <a href=" {{ url('/Registro') }}" class="imgregistro">
        <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">
      </a>
      

        <form action=" {{ url ('/Registro') }}" class="form" id="formulario">
          <h1 class="title">Restablecer Contraseña</h1>

    
          <div class="inputContainer">
            <input type="password" class="input" name="contraseña" id="contraseña" placeholder="a" required>
            <label for="" class="label">Contraseña</label>
          </div>
    
          <div class="inputContainer">
            <input type="password" class="input" name="contraseña2" id="contraseña2" placeholder="a" required>
            <label for="" class="label">Confirmar Contraseña</label>
          </div>

          
          <input type="submit" class="submitBtn" value="Continuar">
          <!--a href="Registro.html"target="_blank" input type="submit" class="submitBtn" value="Continuar" > Continuar </a-->

         
        </form>
      </div>
</body>
<script src="{{ asset('js/Restablecer_Contra.js') }}"></script>
</html>