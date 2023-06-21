<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

</head>

<body>
    <div class="signupFrm">

        <a href=" {{ url ('/Index') }}" class="imgregistro">
          <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">
        </a>


          <form action="{{ route ('login') }}" class="form" method="POST">
            @csrf
            <h1 class="title">Formulario de Registro</h1>
            <div class="inputContainer">
              <input type="text" class="input" name="name" id="form2Example11" pattern="^[A-Za-z]+$" maxlength="35" placeholder="a" required>
              <label  class="label" id="form2Example11"> Nombre </label>
            </div>
            <!--div class="inputContainer">
              <input type="number" class="input" name="Telefono" id="Telefono" placeholder="a" required >
              <label for="" class="label"> Telefono</label>
            </div-->

            <div class="inputContainer">
              <input type="email" class="input" name="email"  id="form2Example11" placeholder="a" required>
              <label for="form2Example11" class="label"  id="form2Example11">Correo</label>
            </div>

           <!--<div class="inputContainer">
              <input type="text" class="input" placeholder="a" required>
              <label for="" class="label">Usuario</label>
            </div>-->

            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" required>
              <label for="" class="label">Contraseña</label>
            </div>

            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" required>
              <label for="" class="label">Confirmar Contraseña</label>
            </div>


            <br><a>Volver a inicio de sesion</a><br>
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
