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

<a href=" {{route('login')}}" class="imgregistro">
  <img src="{{ asset('img/LOGO MORADO LAVAMATIC.png') }}" alt="">
</a>

                <form  class="form" action="{{route('register')}}" method="POST">

                          @csrf
                          
        <h1 class="title">Crear Cuenta</h1>

        <div class="form-outline mb-4">
                  <label class="form-label display-6 text-purple fw-bold" for="form2Example11">Nombre</label>
                  <div class="inputContainer">
                    <input type="name" name="name" id="form2Example11" class="input">
                  </div>
  
        <div class="form-outline mb-4">
                  <label class="form-label display-6 text-purple fw-bold" for="form2Example11">Correo</label>
                  <div class="inputContainer">
                    <input type="email" name="email" id="form2Example11" class="input">
                  </div>
  
                  <label class="form-label display-6 text-purple fw-bold" for="form2Example22">Contraseña</label>
                  <div class="inputContainer">
                  <input type="password" name="password" id="form2Example22" class="input">
                  </div>
                  <label class="form-label display-6 text-purple fw-bold" for="form2Example22">Canfirmar Contraseña</label>
                  <div class="inputContainer">
                  <input type="password" name="password_confirmation" id="form2Example22" class="input">
                  </div>

                  <br><a href="{{route('login')}}">Ir a Login</a><br>

          <button type="submit" class="submitBtn" value="Continuar">Continuar</button>
      </form>
      
</section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>