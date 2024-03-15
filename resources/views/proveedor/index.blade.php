<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Don Cristobal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/proveedor.css') }}">
</head>
<body>
    <div class="container">
        <h4>Gestion de Proveedores</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('proveedor.index')}}">
                    <div class="col-auto my-1">
                        <a href="{{route('proveedor.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                </form>
                <form action="excel_proveedor" enctype="multipart/form-data">
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
                            <th>ID_PROVEEDOR</th>
                            <th>NOMBRE_PROVEEDOR</th>
                            <th>DiRECCION_PROVEEDOR</th>
                            <th>TEL_PROVEEDOR</th>
                            <th>NOMBRE DEL EMPLEADO</th>
                        </tr>
                  
                    <tbody>
                    @foreach($proveedores as $proveedor)
                    <tr>
                        <td>
                            <a href="{{route('proveedor.edit',$proveedor->ID_PROVEEDOR)}}" class="btn btn-warning btn-sm">Editar</a> 
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$proveedor->ID_PROVEEDOR}}">
                                Eliminar
                            </button>
                        </td>
                        <td>{{$proveedor->ID_PROVEEDOR}}</td>
                        <td>{{$proveedor->NOMBRE_PROVEEDOR}}</td>
                        <td>{{$proveedor->DIRECCION_PROVEEDOR}}</td>
                        <td>{{$proveedor->TEL_PROVEEDOR}}</td>
                        <td>{{$proveedor->ID_EMPLEADO_FK_PROVEEDOR}}</td>   
                    </tr>
                    @include('proveedor.delete')
                    @endforeach
                      </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>