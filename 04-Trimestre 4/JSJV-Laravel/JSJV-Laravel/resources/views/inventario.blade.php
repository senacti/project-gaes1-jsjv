<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDinventario</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--  CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!--  JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>
<body>

    <header class="menu">
        <div class="cuadrolog">
            <a href=" {{ url ('/Dashboard') }}"><img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo"> </a>
            </div>
           
            <nav>
                <a href=""></a>

            </nav>

        
           </div>
           <div class="menuadmin">
            <button>Santiago Godoy</button>
            <img class="fotoad" src="{{ asset('img/Administrador.jpg') }}" alt="fotoad">
            <div class="menuadminl">
            <a href="#">Informacion de empleados</a>
            <a href="#">Informacion personal</a>
            <a href=" {{ url('Index') }}">Cerrar sesion</a>
            </div>
          </div>             
    </header>
    

    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span ><a href=" {{ route('crudOT.Index') }}">Orden de trabajo</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-user"></a></i>
                <span ><a href="{{ route('CRUDsueldo.Index') }}">Sueldos</a></span>
                
            </div>

            <div class="enlace" >
                <i class="bx bx-grid-alt" ></i>
                <span ><a href="{{ route('Crud_actividades.Index') }}">Actividades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span ><a href=" {{ url ('/Error404') }}">Mensajes</a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span ><a href=" {{ url('/Error500') }}">Novedades</a></span>
                
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span ><a href=" {{ route('crud.Index') }}">Inventarios</a></span>
            </div>

            <!--div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div-->

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span ><a href=" {{ url ('/Error404') }}">Configuracion</a></span>
            </div>
        </div>
    </div>
    
    <div class="barra de navegacion">
    </div>


             
           </div>
<!-- Menu -->
<ul class="list-unstyled text-end" style="position: fixed; bottom: 0; left: 0; right: 0;">
  <li class="mb-2">
    <a href="{{route('inventarios.pdf')}}" class="btn btn-danger btn-block"> PDF </a>
  </li>
  <li class="mb-2">
    <a href="{{route('inventarios.pdf')}}" class="btn btn-success btn-block">Excel</a>
  </li>
</ul>
    
<div class="container mt-5">
    <h1 class="text-center p-5">Inventario</h1>
  
  
             <!-- NOTIFICACION DE DELETE-->
     <script>
    var res = function() {
        var button = event.target;
        var href = button.getAttribute('data-bs-href');
        var not = confirm("¿Estás seguro de eliminar la actividad?");
        if (not) {
            window.location.href = href;
        }
        return false;
    };
    </script>


    <div class="p-5 table-responsive">
        <!-- MENSAJE DE CORRECTO E INCORRECTO-->
    @if (session('Correcto'))
        <div class="alert alert-succes">{{session('Correcto')}}</div>
    @endif
    @if (session('Incorrecto'))
        <div class="alert alert-danger">{{session('Incorrecto')}}</div>
    @endif
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Inventario</button>

 <!-- Modal AÑADIR DATOS -->
 <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="modalRegistrarLabel">Añadir Inventario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route("crud.create")}}" method="POST">
        @csrf
        <!-- Modal AÑADIR id inventario -->
        <div class="mb-3">
          <label for="txtinventario" class="form-label">ID inventario</label>
          <input type="text" class="form-control" id="txtinventario" aria-describedby="emailHelp" name="txtinventario">
        </div>
        <!-- Modal AÑADIR nombre P-->
        <div class="mb-3">
          <label for="txtnombre" class="form-label">Nombre proveedor</label>
          <input type="text" class="form-control" id="txtnombre" aria-describedby="emailHelp" name="txtnombre">
        </div>
       <!-- Modal AÑADIR cantidad-->
        <div class="mb-3">
          <label for="txtcantidad" class="form-label">Cantidad</label>
          <input type="text" class="form-control" id="txtcantidad" aria-describedby="emailHelp" name="txtcantidad">
        </div>
       <!-- Modal AÑADIR descripcion -->
        <div class="mb-3">
          <label for="txtdecripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="txtdecripcion" aria-describedby="emailHelp" name="txtdecripcion">
        </div>
       <!-- Modal AÑADIR insumo-->
        <div class="mb-3">
          <label for="txtinsumo" class="form-label">ID insumo</label>
          <input type="text" class="form-control" id="txtinsumo" aria-describedby="emailHelp" name="txtinsumo">
        </div>
       <!-- Modal AÑADIR  maquinas-->
        <div class="mb-3">
          <label for="txtmaquina" class="form-label">ID maquina</label>
          <input type="text" class="form-control" id="txtmaquina" aria-describedby="emailHelp" name="txtmaquina">
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


    <table class="table" class="mb-4">
  <thead >
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

    @foreach($datos as $item)
    <tr>
      <th>{{$item ->id_Inventarios}}</th>
      <td>{{$item ->NombreProveedor}}</td>
      <td>{{$item ->cantidad}}</td>
      <td>{{$item ->decripcionInventario}}</td>
      <td>{{$item ->idInsumo}}</td>
      <td>{{$item ->idMaquina}}</td>
      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_Inventarios}}">Modificar</button>
      <button data-bs-href="{{ route('crud.delete', $item->id_Inventarios) }}" onclick="return res()" type="button" class="btn btn-danger">Eliminar</button>
      
           <!--<i class="fa-solid fa-delete-left"></i>
          <i class="fa-solid fa-pen-to-square"></i>-->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
      </div>


<!-- Modal modificar datos -->
@foreach ($datos as $item)
<div class="modal fade" id="modalEditar{{$item->id_Inventarios}}" tabindex="-1" aria-labelledby="modalEditarLabel{{$item->id_Inventarios}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditarLabel{{$item->id_Inventarios}}">Modificar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('crud.update') }}">
                             @csrf

                    <div class="mb-3">
                        <label for="txtinventario" class="form-label">Id_Inventarios</label>
                        <input type="text" class="form-control" id="txtinventario" aria-describedby="emailHelp" name="txtinventario" value="{{$item->id_Inventarios}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre Proveedor</label>
                        <input type="text" class="form-control" id="txtnombre" aria-describedby="emailHelp" name="txtnombre" value="{{$item->NombreProveedor}}">
                    </div>
                    <div class="mb-3">
                        <label for="txtcantidad" class="form-label">Cantidad</label>
                        <input type="text" class="form-control" id="txtcantidad" aria-describedby="emailHelp" name="txtcantidad" value="{{$item->cantidad}}">
                    </div>
                    <div class="mb-3">
                        <label for="txtdecripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="txtdecripcion" aria-describedby="emailHelp" name="txtdecripcion" value="{{$item->decripcionInventario}}">
                    </div>
                    <div class="mb-3">
                        <label for="txtinsumo" class="form-label">Id_Insumo</label>
                        <input type="text" class="form-control" id="txtinsumo" aria-describedby="emailHelp" name="txtinsumo" value="{{$item->idInsumo}}">
                    </div>
                    <div class="mb-3">
                        <label for="txtmaquina" class="form-label">Id_Maquina</label>
                        <input type="text" class="form-control" id="txtmaquina" aria-describedby="emailHelp" name="txtmaquina" value="{{$item->idMaquina}}">
                    </div>



         <!-- BOTONES MODAL MODIFICAR-->
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </div>
    </form>
    </div>
    </div>
  </div>
</div>
@endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>