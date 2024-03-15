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
        <h4>Gestion de Pedidos</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('pedido.index')}}">
                    <div class="col-auto my-1">
                        <a href="{{route('pedido.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>ID_PEDIDO</th>
                            <th>NOMBRE_PROVEEDOR</th>
                            <th>NOMBRE_PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>FECHA_PEDIDO</th>
                            <th>SUBTOTAL</th>
                            <th>TOTAL</th>
                            
                        </tr>
                    <tbody>
                    @foreach($pedidos as $pedido)
                    <tr>
                        <td>
                            <a href="{{route('pedido.edit',$pedido->ID_PEDIDO_PROVEEDOR)}}" class="btn btn-warning btn-sm">Editar</a> 
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$pedido->ID_PEDIDO_PROVEEDOR}}">
                                Eliminar
                            </button>
                        </td>
                        <td>{{$pedido->ID_PEDIDO_PROVEEDOR}}</td>
                        <td>{{$pedido->ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR}}</td>
                        <td>{{$pedido->ID_PRODUCTO_FK_PEDIDO_PROVEEDOR}}</td>
                        <td>{{$pedido->CANTIDAD}}</td>
                        <td>{{$pedido->FECHA_PEDIDO}}</td>
                        <td>{{$pedido->SUBTOTAL}}</td>
                        <td>{{$pedido->TOTAL}}</td>
                    </tr>
                    @include('pedido.delete')
                    @endforeach
                      </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>