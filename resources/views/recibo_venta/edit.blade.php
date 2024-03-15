<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>don cristobal </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/recibo_venta.css') }}">
</head>
<body>
    <div class="container">
        <h4>Editar Recibos</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('recibo_venta.update',$recibos_venta->ID_RECIBO)}}" method="POST">
                    @csrf
                 @method('PUT')   
                    <div class="form-group my-1 ">
                        <label for="FECHA_RECIBO">FECHA DEL RECIBO</label>
                        <input type="date" class="form-control" name="FECHA_RECIBO" id="FECHA_RECIBO" required  value="{{$recibos_venta->FECHA_RECIBO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="VALOR_RECIBO">VALOR DEL RECIBO</label>
                        <input type="number" class="form-control" name="VALOR_RECIBO" required maxlength="20" min="1" value="{{$recibos_venta->VALOR_RECIBO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="IVA_RECIBO">IVA DEL RECIBO</label>
                        <input type="number" class="form-control" name="IVA_RECIBO" required maxlength="5" min="1" value="{{$recibos_venta->IVA_RECIBO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="CANT_RECIBO">CANTIDAD DEL RECIBO</label>
                        <input type="number" class="form-control" name="CANT_RECIBO" required maxlength="20" min="1" value="{{$recibos_venta->CANT_RECIBO}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="MESA">MESA</label>
                        <input type="number" class="form-control" name="MESA" required maxlength="5"  min="1" value="{{$recibos_venta->MESA}}">
                    </div>
                    <div class="form-group my-1">
                        <label for="ID_EMPLEADO_FK_VENTA">ID EMPLEADO</label>
                        <select class="form-control" name="ID_EMPLEADO_FK_VENTA" id="ID_EMPLEADO_FK_VENTA" required>
                            <option value="">~~Escoja el Empleado~~</option>
                            @foreach ($empleado as $empleado)
                                <option value="{{ $empleado->NOM_EMPLEADO }}" @if($empleado->ID_EMPLEADO == $recibos_venta->ID_EMPLEADO_FK_VENTA) selected @endif>
                                    {{ $empleado->NOM_EMPLEADO }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group my-1">
                        <label for="ID_PRODUCTO_FK_VENTA">ID PRODUCTO</label>
                        <select class="form-control" name="ID_PRODUCTO_FK_VENTA" id="ID_PRODUCTO_FK_VENTA" required>
                            <option value="">~~Escoja el Producto~~</option>
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->NOM_PRODUCTO }}" @if($producto->ID_PRODUCTO == $recibos_venta->ID_PRODUCTO_FK_VENTA) selected @endif>
                                    {{ $producto->NOM_PRODUCTO }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group my-1">
                        <label for="ID_METODO_PAGO_FK_VENTA">METODO PAGO</label>
                        <select class="form-control" name="ID_METODO_PAGO_FK_VENTA" id="ID_METODO_PAGO_FK_VENTA" required>
                            <option value="">~~Escoja el Metodo de pago~~</option>
                            <option value="Efectivo" @if($recibos_venta->ID_METODO_PAGO_FK_VENTA == 'Efectivo') selected @endif>Efectivo</option>
                            <option value="Nequi" @if($recibos_venta->ID_METODO_PAGO_FK_VENTA == 'Nequi') selected @endif>Nequi</option>
                            <option value="Daviplata" @if($recibos_venta->ID_METODO_PAGO_FK_VENTA == 'Daviplata') selected @endif>Daviplata</option>
                         </select>
                    </div>
                    <div class="form-group my-1">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
      
    <script>
        // JavaScript validation for the date field
        document.getElementById('FECHA_RECIBO').addEventListener('input', function () {
     var currentDate = new Date().toISOString().split('T')[0];
 });

 // JavaScript validation for the date field
 document.getElementById('FECHA_RECIBO').addEventListener('input', function () {
     var currentDate = new Date().toISOString().split('T')[0];
     if (this.value !== currentDate) {
         this.setCustomValidity('La fecha debe ser hoy.');
     } else {
         this.setCustomValidity('');
     }
 });
</script>
<script>
 // JavaScript validation for numeric input fields
 function validateNumericInput(inputId, errorId) {
     var input = document.getElementById(inputId);
     var error = document.getElementById(errorId);
     
     if (input.value <= 0 || isNaN(input.value)) {
         error.textContent = '.';
         input.setCustomValidity('Error por favor colocar un numero Valido.');
     } else {
         error.textContent = '';
         input.setCustomValidity('');
     }
 }

 // Add event listeners for numeric input fields
 document.getElementById('VALOR_RECIBO').addEventListener('input', function () {
     validateNumericInput('VALOR_RECIBO', 'valorError');
 });

 document.getElementById('IVA_RECIBO').addEventListener('input', function () {
     validateNumericInput('IVA_RECIBO', 'ivaError');
 });

 document.getElementById('CANT_RECIBO').addEventListener('input', function () {
     validateNumericInput('CANT_RECIBO', 'cantidadError');
 });

 document.getElementById('MESA').addEventListener('input', function () {
     validateNumericInput('MESA', 'mesaError');
 });


</script>
    
</body>
</html>