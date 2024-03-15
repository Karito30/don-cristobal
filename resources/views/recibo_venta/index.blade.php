<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>don cristobal </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/venta.css') }}">
</head>
<body>
    <div class="container">
        <h4>Gestion de Recibos</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('venta.index')}}">
                    <div class="col-auto my-1">
                        <a href="{{route('venta.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                    <div class="col-auto my-1">
                        <input type="text" class="form-control" name="buscar" placeholder="Buscar">
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
                <form action="excel_venta" enctype="multipart/form-data">
                        <button class="btn btn-success">Exportar Excel</button>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID_RECIBO</th>
                                <th>FECHA_RECIBO</th>
                                <th>VALOR_RECIBO</th>
                                <th>IVA_RRECIBO</th>
                                <th>CANT_RECIBO</th>
                                <th>MESA</th>
                                <th>ID EMPLEADO</th>
                                <th>ID PRODUCTO</th>
                                <th>METODO PAGO</th>
                            </tr>
                            <tbody>
                            @foreach ($venta as $venta )
                                <tr>
                                    <td>
                                        <a href="{{route('venta.edit',$venta->ID_RECIBO)}}" class="btn btn-warning btn-sm">Editar</a> 
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$venta->ID_RECIBO}}">
                                            Eliminar
                                        </button>
                                    </form>
                                    </td>
                                    <td>{{$venta->ID_RECIBO}}</td>
                                    <td>{{$venta->FECHA_RECIBO}}</td>
                                    <td>{{$venta->VALOR_RECIBO}}</td>
                                    <td>{{$venta->IVA_RECIBO}}</td>
                                    <td>{{$venta->CANT_RECIBO}}</td>
                                    <td>{{$venta->MESA}}</td>
                                    <td>{{$venta->ID_EMPLEADO_FK_VENTA}}</td>
                                    <td>{{$venta->ID_PRODUCTO_FK_VENTA}}</td>
                                    <td>{{$venta->ID_METODO_PAGO_FK_VENTA}}</td>
                                </tr>
                                @include('venta.delete')
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>