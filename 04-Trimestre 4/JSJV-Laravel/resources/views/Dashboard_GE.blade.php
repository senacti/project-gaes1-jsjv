<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dashboard</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--  CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Estilos_Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Estilo.Tabla.css') }}">

    <!--  JS -->
    <script src=" {{ asset('/js/app.js') }}" defer></script>

</head>
<body>

    <header class="menu">
        <div class="cuadrolog">
            <a href=" {{ url('/Dashboard') }}"><img class="logo" src="{{ asset('img/Lavamatic La Italiana logo.jpeg') }}" alt="logo"></a>
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
            <a href=" {{ url('/Index') }}">Cerrar sesion</a>
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
                <span ><a href=" {{ url(' /DashBoard_Ot') }}">Orden de trabajo</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-user"></a></i>
                <span ><a href=" {{ url('/Dashboard_GE') }}">Empleado</a></span>

            </div>

            <div class="enlace" >
                <i class="bx bx-grid-alt" ></i>
                <span ><a href=" {{ url('/Dashboard_GA') }}">Actividades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span ><a href=" {{ url('/Error404') }}">Mensajes</a></span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span ><a href=" {{ url('/Error500') }}">Novedades</a></span>

            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span ><a href=" {{ url('/Dashboard_Inv') }}">Inventarios</a></span>
            </div>

            <!--div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div-->

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span ><a href=" {{ url('/Error404') }}">Configuracion</a></span>
            </div>
        </div>
    </div>

    <div class="barra de navegacion">
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

<h1 class="text-center p-5">Sueldos </h1>

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
    var not = confirm("¿Estás seguro de eliminar este pago?");
    if (not) {
        window.location.href = href;
    }
    return false;
};
</script>


<div class="p-5 table-responsive">
    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Sueldo</button>

    <!-- Registro de Actividad -->
    <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegistrarLabel">Registrar pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('CRUDsueldo.create') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="txtCodigo" class="form-label">Codigo del pago</label>
                            <input type="text" class="form-control" id="txtCodigo" name="txtCodigo">
                        </div>
                        <div class="mb-3">
                            <label for="txtdetallePago" class="form-label">Detalle del pago</label>
                            <input type="text" class="form-control" id="txtdetallePago" name="txtdetallePago">
                        </div>
                        <div class="mb-3">
                            <label for="txtdescripcionCuenta" class="form-label">Descripción Cuenta</label>
                            <input type="text" class="form-control" id="txtdescripcionCuenta" name="txtdescripcionCuenta">
                        </div>
                        <div class="mb-3">
                            <label for="txtnumeroCuenta" class="form-label">No. Cuenta</label>
                            <input type="text" class="form-control" id="txtnumeroCuenta" name="txtnumeroCuenta">
                        </div>
                        <div class="mb-3">
                            <label for="txttotalPago" class="form-label">Total Pago</label>
                            <input type="text" class="form-control" id="txttotalPago" name="txttotalPago">
                        </div>
                        <div class="modal-footer">
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
                                        <th scope="col">Id Pago</th>
                                        <th scope="col">Detalle pago</th>
                                        <th scope="col">Descripcion Cuenta</th>
                                        <th scope="col">No. Cuenta</th>
                                        <th scope="col">Total Pago</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($datos as $item)
                                    <tr>
                                        <th>{{ $item->id_Sueldo}}</th>
                                        <td>{{ $item->detallePago }}</td>
                                        <td>{{ $item->descripcionCuenta }}</td>
                                        <td>{{ $item->numeroCuenta }}</td>
                                        <td>{{ $item->totalPago }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_Sueldo}}">Modificar</button>
                                            <button data-bs-href="{{ route('CRUDsueldo.delete', $item->id_Sueldo) }}" onclick="return res()" type="button" class="btn btn-danger">Eliminar</button>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
</div>

@foreach ($datos as $item)
<div class="modal fade" id="modalEditar{{$item->id_Sueldo}}" tabindex="-1" aria-labelledby="modalEditarLabel{{$item->id_Sueldo}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditarLabel{{$item->id_Sueldo}}">Modificar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('CRUDsueldo.update', ['id_Sueldo' => $item->id_Sueldo]) }}">

                             @csrf

                    <div class="mb-3">
                        <label for="txtCodigo" class="form-label">Codigo del Pago</label>
                        <input type="text" class="form-control" id="txtCodigo" aria-describedby="emailHelp" name="txtCodigo" value="{{$item->id_Sueldo}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtdetallePago" class="form-label">Detalle del Pago</label>
                        <input type="text" class="form-control" id="txtdetallePago" aria-describedby="emailHelp" name="txtdetallePago" value="{{$item->detallePago}}">
                    </div>
                    <div class="mb-3">
                        <label for="txtdescripcionCuenta" class="form-label">Descripción de la cuenta</label>
                        <input type="text" class="form-control" id="txtdescripcionCuenta" aria-describedby="emailHelp" name="txtdescripcionCuenta" value="{{$item->descripcionCuenta}}">

                    </div>
                    <div class="mb-3">
                        <label for="txtnumeroCuenta" class="form-label">No. Cuenta</label>
                        <input type="text" class="form-control" id="txtnumeroCuenta" aria-describedby="emailHelp" name="txtnumeroCuenta" value="{{$item->numeroCuenta}}">
                    </div>
                    <div class="mb-3">
                        <label for="txttotalPago" class="form-label">Total Pago</label>
                        <input type="text" class="form-control" id="txttotalPago" aria-describedby="emailHelp" name="txttotalPago" value="{{$item->totalPago}}">
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
</div>

    </div>

</body>
<script src="{{ asset('js/resgistro.js') }}"></script>
</html>
