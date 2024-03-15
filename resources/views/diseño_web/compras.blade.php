<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
    <link rel="stylesheet" href="{{ asset('css/diseño_web/compras.css')}}">
</head>
<body>
 <div id="app" class="col-11">

    <h2>Factura</h2>

    <div class="row my-3">
      <div class="col-10">
        <h1>Don Cristobal</h1>
        <p>kennedy central</p>
        <p>calle 38 SUR #73 f-18</p>
      </div>
      <div class="col-2">
        <img src="img/don_cristobal__1_-removebg-preview.png" />
      </div>
    </div>
  
    <hr />
  
    <div class="row fact-info mt-3">
      <div class="col-3">
        <h5>Nombre Administrador</h5>
        <p>
          Don Cristobal
        </p>
      </div>
      <div class="col-3">
        <h5>Enviar a</h5>
        <p>
          arianmanuel75@gmail.com
        </p>
      </div>

      <div class="col-3">
        <h5>N° de Mesa</h5>
        <p>1</p>
        <h5>Fecha</h5>
        <p>03/28/2023</p>
        <h5>IVA</h5>
        <p>19%</p>
      </div>

    </div>
  <hr>
    <div class="row my-5">
      <table class="table table-borderless factura">
        <thead>
          <tr>
            <th>Cant.</th>
            <th>Descripcion</th>
            <th>Precio Unitario</th>
            <th>Importe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Heineken</td>
            <td>4,500.00</td>
            <td>4,500.00</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Tequila</td>
            <td>98.900.00</td>
            <td>12,000.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th>Total Factura</th>
            <th>$103,400.00</th>
          </tr>
        </tfoot>
      </table>
    </div>
  
    <div class="cond row">
      <div class="col-12 mt-3">
        <h4>Condiciones y formas de pago</h4>
        <p>El pago se debe realizar antes de salir del establecimiento.</p>                  
          nequi: 3209602547
          <br />
        </p>
      </div>
    </div>
    <button type="submit" class="btn">
      <span> <a href="pagina.html"> Enviar
         </a></span>
    </button>
</div>
</body>
</html>