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

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID inventario</th>
        <th scope="col">Nombre proveedor </th>
        <th scope="col">Cantidad</th>
        <th scope="col">Descripcion</th>
        <th scope="col">ID Insumo</th>
        <th scope="col">ID Maquina</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">

      @foreach($inventarios as $item)
      <tr>
        <th>{{$item ->id_Inventarios}}</th>
        <td>{{$item ->NombreProveedor}}</td>
        <td>{{$item ->cantidad}}</td>
        <td>{{$item ->decripcionInventario}}</td>
        <td>{{$item ->idInsumo}}</td>
        <td>{{$item ->idMaquina}}</td>
        <td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
