<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Don Cristobal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/producto.css') }}">
</head>
<body>
    <div class="container">
        <h4>Gestion de Proveedores</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('producto.index')}}">
                    <div class="col-auto my-1">
                        <a href="{{route('producto.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                </form>
                <form action="excel_productos" enctype="multipart/form-data">
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
                            <th>ID_PRODUCTO</th>
                            <th>NOM_PRODUCTO</th>
                            <th>VALOR_PRODUCTO</th>
                            <th>CATEGORIA_PRODUCTO</th>
                            <th>CANT_PRODUCTO</th>
                            <th>ID PROVEEDOR</th>
                        </tr>
                  
                    <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>
                            <a href="{{route('producto.edit',$producto->ID_PRODUCTO)}}" class="btn btn-warning btn-sm">Editar</a> 
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$producto->ID_PRODUCTO}}">
                                Eliminar
                            </button>
                        </td>
                        <td>{{$producto->ID_PRODUCTO}}</td>
                        <td>{{$producto->NOM_PRODUCTO}}</td>
                        <td>{{$producto->VALOR_PRODUCTO}}</td>
                        <td>{{$producto->CATEGORIA_PRODUCTO}}</td>
                        <td>{{$producto->CANT_PRODUCTO}}</td>
                        <td>{{$producto->ID_PROVEEDOR_FK_PRODUCTO}}</td>   
                    </tr>
                    @include('producto.delete')
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