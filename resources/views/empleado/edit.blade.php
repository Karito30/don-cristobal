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
        <h4>Editar Empleado</h4>
        <div class="row">
            <div class="xol-xl-12">
                <form action="{{route('empleado.update',$empleados->ID_EMPLEADO)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-1">
                        <label for="FECHA_NA_EMPLEADO">FECHA DEL EMPLEADO</label>
                        <input type="date" class="form-control" name="FECHA_NA_EMPLEADO" required  value="{{$empleados->FECHA_NA_EMPLEADO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="NOM_EMPLEADO">NOMBRE DEL EMPLEADO</label>
                        <input type="text" class="form-control" name="NOM_EMPLEADO" required maxlength="50" value="{{$empleados->NOM_EMPLEADO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="NOMBRE_CARGO">CARGO</label>
                        <input type="text" class="form-control" name="NOMBRE_CARGO" required maxlength="50" value="{{$empleados->NOMBRE_CARGO}}">
                    </div>
                    <div class="form-group my-1">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="javascript:history.back()">Ir a lista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>