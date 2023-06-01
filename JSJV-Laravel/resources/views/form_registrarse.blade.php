<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>Registrarse</title>
</head>
<body>
    <!--header>
        <a href= "Registro.html" class="logo">

            <img src="img/LOGO MORADO LAVAMATIC.png" alt="">
     
         </a>
    </header-->



     <div class="signupFrm">

      <a href=" {{ url('/Registro') }}" class="imgregistro">
        <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">
      </a>
      

        <form action="{{ url('/Dashboard')}}" class="form" id="formulario">
          <h1 class="title">Formulario de Registro</h1>
          <div class="inputContainer">
            <input type="text" class="input" name="nombre" id="nombre" pattern="^[A-Za-z]+$" maxlength="35" placeholder="a" required>
            <label for="" class="label"> Nombre </label>
          </div>
          <div class="inputContainer">
            <input type="number" class="input" name="Telefono" id="Telefono" placeholder="a" required >
            <label for="" class="label"> Telefono</label>
          </div>
    
          <div class="inputContainer">
            <input type="email" class="input" name="correo" id="correo" placeholder="a" required>
            <label for="" class="label">Correo</label>
          </div>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" required>
            <label for="" class="label">Usuario</label>
          </div>
    
          <div class="inputContainer">
            <input type="password" class="input" placeholder="a" required>
            <label for="" class="label">Contraseña</label>
          </div>
    
          <div class="inputContainer">
            <input type="password" class="input" placeholder="a" required>
            <label for="" class="label">Confirmar Contraseña</label>
          </div>

          
          <button type="submit" class="submitBtn" value="Continuar">
          <!--a href="DashBoard.html"target="_blank" input type="submit" class="submitBtn" value="Continuar" --> Continuar </a>

         
        </form>
        
      </div>
</body>
<script src="{{ asset('js/registro.js') }}"></script>
</html>