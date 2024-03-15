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
        <h4>Editar Proveedor</h4>
        <div class="row">
            <div class="xol-xl-12">
                <form action="{{route('producto.update',$productos->ID_PRODUCTO)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-1">
                        <label for="NOM_PRODUCTO">NOMBRE DEL PRODUCTO</label>
                        <input type="text" class="form-control" name="NOM_PRODUCTO" required maxlength="50" value="{{$productos->NOM_PRODUCTO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="VALOR_PRODUCTO">VALOR DEL PRODUCTO</label>
                        <input type="number" class="form-control" name="VALOR_PRODUCTO" id="VALOR_PRODUCTO"  value="{{$productos->VALOR_PRODUCTO}}">
                        <small class="text-danger" id="valorError"></small>
                    </div>
                    <div class="form-group my-1">
                        <label for="CATEGORIA_PRODUCTO">CATEGORIA DEL PRODUCTO</label>
                        <input type="text" class="form-control" name="CATEGORIA_PRODUCTO" required maxlength="50" value="{{$productos->CATEGORIA_PRODUCTO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="CANT_PRODUCTO">CANTIDAD DEL PRODUCTO</label>
                        <input type="number" class="form-control" name="CANT_PRODUCTO" id="CANT_PRODUCTO" required maxlength="50" value="{{$productos->CANT_PRODUCTO}}">
                        <small class="text-danger" id="cantidadError"></small>
                    </div>
                    <div class="form-group my-1">
                        <label for="ID_PROVEEDOR_FK_PRODUCTO">ID PROVEEDOR</label>
                        <select class="form-control" name="ID_PROVEEDOR_FK_PRODUCTO" id="ID_PROVEEDOR_FK_PRODUCTO" required maxlength="5"value="{{$productos->ID_PROVEEDOR_FK_PRODUCTO}}">
                            <option value="">~~Escoja el Proveedor~~</option>
                             @foreach ($proveedores as $proveedor)
                             <option value="{{ $proveedor->NOMBRE_PROVEEDOR }}">{{ $proveedor->NOMBRE_PROVEEDOR }}</option>
                             @endforeach
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
        // JavaScript validation for numeric input fields
        function validateNumericInput(inputId, errorId) {
            var input = document.getElementById(inputId);
            var error = document.getElementById(errorId);
            
            if (input.value <= 0 || isNaN(input.value)) {
                error.textContent = 'Por favor ingresa un valor valido.';
                input.setCustomValidity('Por favor ingresa un valor valido.');
            } else {
                error.textContent = '';
                input.setCustomValidity('');
            }
        }

        // Add event listeners for numeric input fields
        document.getElementById('VALOR_PRODUCTO').addEventListener('input', function () {
            validateNumericInput('VALOR_PRODUCTO', 'valorError');
        });

        document.getElementById('CANT_PRODUCTO').addEventListener('input', function () {
            validateNumericInput('CANT_PRODUCTO', 'cantidadError');
        });
    </script>
</body>
</html>