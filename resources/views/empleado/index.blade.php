<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Don Cristobal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/empleado.css') }}">
</head>
<body>
    <div class="container">
        <h4>Gestion de Empleado</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('empleado.index')}}">
                    <div class="col-auto my-1">
                        <a href="{{route('empleado.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                </form>
                <form action="excel_empleado" enctype="multipart/form-data">
                        <button class="btn btn-success">Exportar Excel</button>
                </form>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>ID_EMPLEADO</th>
                            <th>FECHA_NA_EMPLEADO</th>
                            <th>NOM_EMPLEADO</th>
                            <th>NOMBRE_CARGO</th>
                        </tr>
                  
                    <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>
                            <a href="{{route('empleado.edit',$empleado->ID_EMPLEADO)}}" class="btn btn-warning btn-sm">Editar</a> 
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$empleado->ID_EMPLEADO}}">
                                Eliminar
                            </button>
                        </td>
                        <td>{{$empleado->ID_EMPLEADO}}</td>
                        <td>{{$empleado->FECHA_NA_EMPLEADO}}</td>
                        <td>{{$empleado->NOM_EMPLEADO}}</td>
                        <td>{{$empleado->NOMBRE_CARGO}}</td>
                         
                    </tr>
                    @include('empleado.delete')
                    @endforeach
                      </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>