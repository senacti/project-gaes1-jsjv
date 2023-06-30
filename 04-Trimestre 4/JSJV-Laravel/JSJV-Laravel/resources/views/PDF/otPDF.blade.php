<!doctype html>
<html lang="en">

<head>
  <title>Informes de las Ordenes de Trabajo</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
    .Cabecera {
      background-color: purple;
      color: white;
    }

    .Morado {
      background-color: lavender;
    }
  </style>

<body>
<h1 class="text-center">Ordenes de Trabajo</h1><br>
  <table class="table" style="text-align: center">
  <thead class="Cabecera">
          <tr>
            <th scope="col">ID ordenTrabajo</th>
            <th scope="col">Valor total </th>
            <th scope="col">Fecha entrada</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Tpo producto</th>

            <th></th>
          </tr>
        </thead>
        <tbody class="table">

          @foreach($OrdenTrabajo as $item)
          <tr class="Morado">
            <th>{{$item ->id_Orden_trabajos}}</th>
            <td>{{$item ->valor_total}}</td>
            <td>{{$item ->fecha_de_entrada}}</td>
            <td>{{$item ->cantidad}}</td>
            <td>{{$item ->tipo_producto}}</td>

            </tr>
            @endforeach>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>


