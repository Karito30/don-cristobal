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
        <h4>Editar Pedidos</h4>
        <div class="row">
            <div class="xol-xl-12">
                <form action="{{route('pedido.update',$pedido->ID_PEDIDO_PROVEEDOR )}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-1">
                        <label for="ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR">NOMBRE PROVEEDOR</label>
                        <select class="form-control" name="ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR" id="ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR" required value="{{$pedido->ID_PROVEEDOR_FK_PEDIDO_PROVEEDOR}}">
                           <option value="">~~Escoja el Proveedor~~</option>
                           @foreach ($proveedores as $proveedor)
                           <option value="{{ $proveedor->ID_PROVEEDOR }}">{{ $proveedor->NOMBRE_PROVEEDOR }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group my-1">
                        <label for="NOMBRE_PRODUCTO">NOMBRE_PRODUCTO</label>
                        <select class="form-control" name="NOMBRE_PRODUCTO" id="NOMBRE_PRODUCTO" required value="{{$pedido->NOMBRE_PRODUCTO}}">
                            <option value="">~~Escoja el Producto~~</option>
                             @foreach ($productos as $producto)
                             <option value="{{ $producto->ID_PRODUCTO }}">{{ $producto->NOM_PRODUCTO }}</option>
                             @endforeach
                         </select>
                    </div>
                    <div class="form-group my-1">
                        <label for="CANTIDAD ">CANTIDAD </label>
                        <input type="number" class="form-control" name="CANTIDAD " required maxlength="50" min="0" id="CANTIDAD" value="{{$pedido->CANTIDAD}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="TOTAL_PEDIDO"> FECHA_PEDIDO</label>
                        <input type="date" class=" FECHA_PEDIDO" name=" FECHA_PEDIDO" required maxlength="50" min="0" id=" FECHA_PEDIDO" value="{{$pedido->FECHA_PEDIDO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="SUBTOTAL">SUBTOTAL</label>
                        <input type="number" class="SUBTOTAL" name="SUBTOTAL" required maxlength="50" min="0" id="SUBTOTAL" value="{{$pedido->SUBTOTAL}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="TOTAL">TOTAL</label>
                        <input type="number" class="form-control" name="TOTAL" required maxlength="50" min="0" id="TOTAL" value="{{$pedido->TOTAL}}">
                    </div>
                    <div class="form-group my-1">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="javascript:history.back()">Ir a lista</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Función para calcular los subtotales y el total
        function calcularSubtotalYTotal() {
            const cantidad = parseFloat(document.getElementById("CANTIDAD").value);
            const precioUnitario = parseFloat(document.getElementById("NOMBRE_PRODUCTO").value);
            
            // Validar que la cantidad y el precio unitario no sean negativos
            if (!isNaN(cantidad) && !isNaN(precioUnitario) && cantidad >= 0 && precioUnitario >= 0) {
                const subtotal = cantidad * precioUnitario;
                document.getElementById("SUBTOTAL").value = subtotal;
                document.getElementById("TOTAL").value = subtotal; // Aquí puedes ajustar según tus necesidades
            } else {
                // Si la cantidad o el precio unitario son negativos, muestra un mensaje de error o toma la acción adecuada.
                document.getElementById("CANTIDAD").value = "";
                document.getElementById("SUBTOTAL").value = "";
                document.getElementById("TOTAL").value = "";
            }
        }
    
        // Agregar un evento para calcular automáticamente cuando cambie la cantidad o el producto
        document.getElementById("CANTIDAD").addEventListener("input", calcularSubtotalYTotal);
        document.getElementById("NOMBRE_PRODUCTO").addEventListener("change", calcularSubtotalYTotal);
    
        // Llama a la función para calcular inicialmente
        calcularSubtotalYTotal();
    </script>
</body>
</html>