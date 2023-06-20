<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center p-3">Listado de Actividades</h1>
    <a href="{{route('actividades.pdf')}}" class="btn btn-success">PDF</a>
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
        var not = confirm("¿Estás seguro de eliminar la actividad?");
        if (not) {
            window.location.href = href;
        }
        return false;
    };
    </script>


    <div class="p-5 table-responsive">
        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">Añadir Actividad</button>

        <!-- Registro de Actividad -->
        <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRegistrarLabel">Añadir actividad</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('Crud_actividades.Create') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="txtCodigo" class="form-label">Codigo de la Actividad</label>
                                <input type="text" class="form-control" id="txtCodigo" name="txtCodigo">
                            </div>
                            <div class="mb-3">
                                <label for="txtFecha" class="form-label">Fecha de la Actividad</label>
                                <input type="date" class="form-control" id="txtFecha" name="txtFecha">
                            </div>
                            <div class="mb-3">
                                <label for="txtDescrip" class="form-label">Descripción de la Actividad</label>
                                <input type="text" class="form-control" id="txtDescrip" name="txtDescrip">
                            </div>
                            <div class="mb-3">
                                <label for="txtNov" class="form-label">Estado Actividad</label>
                                <input type="text" class="form-control" id="txtEstado" name="txtEstado">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Añadir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
        
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Actividad</th>
                                            <th scope="col">Estado Actividad</th>
                                            <th scope="col">Fecha Actividad</th>
                                            <th scope="col">Descripción Actividad</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($datos as $item)
                                        <tr>
                                            <th>{{ $item->id_Actividad}}</th>
                                            <td>{{ $item->estadoActividad }}</td>
                                            <td>{{ $item->fechaActividad }}</td>
                                            <td>{{ $item->descripcionActividad }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_Actividad}}">Modificar</button>
                                                <button data-bs-href="{{ route('Crud_actividades.delete', $item->id_Actividad) }}" onclick="return res()" type="button" class="btn btn-danger">Eliminar</button>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
    </div>

    @foreach ($datos as $item)
    <div class="modal fade" id="modalEditar{{$item->id_Actividad}}" tabindex="-1" aria-labelledby="modalEditarLabel{{$item->id_Actividad}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalEditarLabel{{$item->id_Actividad}}">Modificar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('Crud_actividades.update') }}">
                                 @csrf

                        <div class="mb-3">
                            <label for="txtCodigo" class="form-label">Codigo de la Actividad</label>
                            <input type="text" class="form-control" id="txtCodigo" aria-describedby="emailHelp" name="txtCodigo" value="{{$item->id_Actividad}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="txtFecha" class="form-label">Fecha de la Actividad</label>
                            <input type="date" class="form-control" id="txtFecha" aria-describedby="emailHelp" name="txtFecha" value="{{$item->fechaActividad}}">
                        </div>
                        <div class="mb-3">
                            <label for="txtDescrip" class="form-label">Descripción de la Actividad</label>
                            <input type="text" class="form-control" id="txtDescrip" aria-describedby="emailHelp" name="txtDescrip" value="{{$item->descripcionActividad}}">
                        </div>
                        <div class="mb-3">
                            <label for="txtEstado" class="form-label">Estado de la actividad</label>
                            <input type="text" class="form-control" id="txtEstado" aria-describedby="emailHelp" name="txtEstado" value="{{$item->estadoActividad}}">
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
