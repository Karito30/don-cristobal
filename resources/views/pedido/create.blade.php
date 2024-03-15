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
        <h4>Nuevo Pedido</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('pedido.store') }}" method="POST">
                    @csrf
                    <div class="form-group my-1">
                        <label for="ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR">NOMBRE PROVEEDOR</label>
                        <select class="form-control" name="ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR" id="ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR" required>
                           <option value="">~~Escoja el Proveedor~~</option>
                           @foreach ($proveedores as $proveedor)
                           <option value="{{ $proveedor->NOMBRE_PROVEEDOR }}">{{ $proveedor->NOMBRE_PROVEEDOR }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group my-1">
                        <label for="ID_PRODUCTO_FK_PEDIDO_PROVEEDOR">NOMBRE_PRODUCTO</label>
                        <select class="form-control" name="ID_PRODUCTO_FK_PEDIDO_PROVEEDOR" id="ID_PRODUCTO_FK_PEDIDO_PROVEEDOR" required>
                            <option value="">~~Escoja el Producto~~</option>
                             @foreach ($productos as $producto)
                             <option value="{{ $producto->NOM_PRODUCTO }}">{{ $producto->NOM_PRODUCTO }}</option>
                             @endforeach
                         </select>
                    </div>
                    <div class="form-group my-1">
                        <label for="CANTIDAD">CANTIDAD</label>
                        <input type="number" class="form-control" name="CANTIDAD" required maxlength="50" min="0" id="CANTIDAD">
                    </div>
                    <div class="form-group my-1">
                        <label for="FECHA_PEDIDO">FECHA_PEDIDO</label>
                        <input type="date" class="form-control" name="FECHA_PEDIDO" required maxlength="50" id="FECHA_PEDIDO">
                    </div>
                    <div class="form-group my-1">
                        <label for="SUBTOTAL">SUBTOTAL</label>
                        <input type="number" class="form-control" name="SUBTOTAL" required maxlength="50" min="0" id="SUBTOTAL">
                    </div>
                    <div class="form-group my-1">
                        <label for="TOTAL">TOTAL</label>
                        <input type="number" class="form-control" name="TOTAL" required maxlength="50" min="0" id="TOTAL">
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