<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orde de trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
     <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Orden Trabajo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('Ordentrabajo.pdf')}}">PDF</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Ordentrabajo.pdf')}}">Excel</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 <!-- termina el menu -->
      <div class="container mt-5">
    <h1 class="text-center p-5">Orden de trabajo</h1>

    @if(session("correcto"))
    <div class="alert alert-success">{{session("correcto")}}</div>
    @endif

    @if(session("incorrecto"))
    <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif

    <script>
    var res = function() {
        var button = event.target;
        var href = button.getAttribute('data-bs-href');
        var not = confirm("¿Estás seguro de eliminar la Orden de trabajo?");
        if (not) {
            window.location.href = href;
        }
        return false;
    };
    </script>


    <div class="p-5 table-responsive">
        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Orden de trabajo</button>

        <!-- Modal AÑADIR DATOS -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="modalRegistrarLabel">Añadir Orden de trabajo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{route('crudOT.create')}}" method="POST">
          @csrf
          <!-- Modal AÑADIR id ORDEN DE TRABAJO -->
          <div class="mb-3">
            <label for="txtOT" class="form-label">ID ordenTrabajo</label>
            <input type="text" class="form-control" id="txtOT" aria-describedby="emailHelp" name="txtOT">
          </div>
          <!-- Modal AÑADIR Valor total-->
          <div class="mb-3">
            <label for="txtvalor" class="form-label">Valor total</label>
            <input type="text" class="form-control" id="txtvalor" aria-describedby="emailHelp" name="txtvalor">
          </div>
         <!-- Modal AÑADIR Fecha entrada-->
          <div class="mb-3">
            <label for="txtfecha" class="form-label">Fecha entrada</label>
            <input type="date" class="form-control" id="txtfecha" aria-describedby="emailHelp" name="txtfecha">
          </div>
         <!-- Modal AÑADIR cantidad -->
          <div class="mb-3">
            <label for="txtcantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="txtcantidad" aria-describedby="emailHelp" name="txtcantidad">
          </div>
         <!-- Modal AÑADIR estadoProducto-->
          <div class="mb-3">
            <label for="txttipo" class="form-label">Tipo Producto</label>
            <input type="text" class="form-control" id="txttipo" aria-describedby="emailHelp" name="txttipo">
          </div>

  
  
         <!-- BOTONES MODAL AÑADIR-->
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
        </form>
      </div>
  
    </div>
  </div>
  </div>
  
  
      <table class="table">
    <thead>
      <tr>
        <th scope="col">ID ordenTrabajo</th>
        <th scope="col">Valor total </th>
        <th scope="col">Fecha entrada</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Tipo Producto</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
  
  
  
  
      @foreach($datos as $item)
      <tr>
        <th>{{$item ->id_Orden_trabajos}}</th>
        <td>{{$item ->valor_total}}</td>
        <td>{{$item ->fecha_de_entrada}}</td>
        <td>{{$item ->cantidad}}</td>
        <td>{{$item ->tipo_producto}}</td>
        <td>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item ->id_Orden_trabajos}}">Editar</button>
 <button data-bs-href="{{ route('crudOT.delete', $item->id_Orden_trabajos) }}" onclick="return res();" type="button" class="btn btn-danger">Eliminar</button>


     </td>
       </tr>
         @endforeach
          </tbody>
           </table>
    </div>

    @foreach ($datos as $item)
    <div class="modal fade" id="modalEditar{{$item->id_Orden_trabajos}}" tabindex="-1" aria-labelledby="modalEditarLabel{{$item->id_Orden_trabajos}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditarLabel{{$item->id_Orden_trabajos}}">Modificar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('crudOT.update') }}">
                                 @csrf

                        <div class="mb-3">
                            <label for="txtOT" class="form-label">id de la Orden de trabajo</label>
                            <input type="text" class="form-control" id="txtOT" aria-describedby="emailHelp" name="txtOT" value="{{$item->id_Orden_trabajos}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="txtvalor" class="form-label">Valor de la Orden de trabajo</label>
                            <input type="text" class="form-control" id="txtvalor" aria-describedby="emailHelp" name="txtvalor" value="{{$item->valor_total}}">
                        </div>
                        <div class="mb-3">
                            <label for="txtfecha" class="form-label">Fecha de entrada</label>
                            <input type="text" class="form-control" id="txtfecha" aria-describedby="emailHelp" name="txtfecha" value="{{$item->fecha_de_entrada}}">
                        </div>
                        <div class="mb-3">
                            <label for="txtcantidad" class="form-label">Cantidad Orden de trabajo</label>
                            <input type="text" class="form-control" id="txtcantidad" aria-describedby="emailHelp" name="txtcantidad" value="{{$item->cantidad}}">
                        </div>
                        <div class="mb-3">
                            <label for="txttipo" class="form-label">Tipo Producto</label>
                            <input type="text" class="form-control" id="txttipo" aria-describedby="emailHelp" name="txttipo" value="{{$item->tipo_producto}}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>