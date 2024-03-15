<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Don Cristobal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/proveedor.css') }}">
</head>
<body>
    <div class="container">
        <h4>Editar Proveedor</h4>
        <div class="row">
            <div class="xol-xl-12">
                <form action="{{route('proveedor.update',$proveedores->ID_PROVEEDOR)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-1">
                        <label for="NOMBRE_PROVEEDOR">NOMBRE DEL PROVEEDOR</label>
                        <input type="text" class="form-control" name="NOMBRE_PROVEEDOR" required maxlength="50" value="{{$proveedores->NOMBRE_PROVEEDOR}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="DIRECCION_PROVEEDOR">DIRECCION DEL PROVEEDOR</label>
                        <input type="text" class="form-control" name="DIRECCION_PROVEEDOR" required maxlength="50" value="{{$proveedores->DIRECCION_PROVEEDOR}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="TEL_PROVEEDOR">TELEFONO DEL PROVEEDOR</label>
                        <input type="number" class="form-control" name="TEL_PROVEEDOR" required maxlength="10" value="{{$proveedores->TEL_PROVEEDOR}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="ID_EMPLEADO_FK_PROVEEDOR">NOMBRE DEL EMPLEADO</label>
                        <select class="form-control" name="ID_EMPLEADO_FK_PROVEEDOR" id="ID_EMPLEADO_FK_PROVEEDOR"  required maxlength="5"value="{{$proveedores->ID_EMPLEADO_FK_PROVEEDOR}}">
                            <option value="">~~Escoja el Empleado~~</option>
                            @foreach ($empleado as $empleado)
                            <option value="{{ $empleado->NOM_EMPLEADO }}">{{ $empleado->NOM_EMPLEADO }}</option>
                            @endforeach
                        </select>
                        </select>
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