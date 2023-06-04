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
      

        <form action="{{ route('register')}}" class="form" id="formulario" method="post" >
                                        @csrf 
          <h1 class="title">Formulario de Registro</h1>
          <div class="inputContainer">
            <input type="text" class="input" name="name" id="form2Example11">
            <label for="form2Example11" class="label"> Nombre </label>
          </div>
         <!-- <div class="inputContainer">
            <input type="number" class="input" name="Telefono" id="Telefono" placeholder="a" required >
            <label for="" class="label"> Telefono</label>
          </div>-->
    
          <div class="inputContainer">
            <input type="email" class="input" name="email" id="form2Example11">
            <label for="form2Example11" class="label">Correo</label>
          </div>
    
          <!--<div class="inputContainer">
            <input type="text" class="input" placeholder="a" required>
            <label for="" class="label">Usuario</label>
          </div>-->
    
          <div class="inputContainer">
            <input type="password" name="password" class="input" id="form2Example22">
            <label  for="form2Example11" class="label">Contraseña</label>
          </div>
    
          <div class="inputContainer">
            <input type="password" name="password_confirmation" class="input" placeholder="a" required>
            <label class="label" for="form2Example11">Confirmar Contraseña</label>
          </div>

          
          <button type="submit" class="submitBtn" value="Continuar">
          <!--a href="DashBoard.html"target="_blank" input type="submit" class="submitBtn" value="Continuar" --> Continuar </a>

         
        </form>
        
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
     </script>
</body>

</html>
