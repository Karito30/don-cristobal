<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>BAR DON CRISTOBAL</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard/ESTILO.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
<input type="checkbox" id="menu-toggle">
    <div class="sidebar">
               
        <div class="side-content">
            <div class="profile">
                <img class="profile-img bg-img" src="{{asset('css/diseño_web/imagen/logo.png') }}">
              <h4>DON CRISTOBAL</h4>
                <small>PROPIETARIO</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="empleado" target="3">
                            <span class="las la-user-alt"></span>
                            <small>EMPLEADOS</small>
                        </a>
                    </li>
                     <li>
                        <a href="recibo_venta" target="3">
                             <span class="las la-file"></span>
                             <small>RECIBO</small>
                         </a>
                     </li>

                     <li>
                        <a href="producto" target="3">
                             <span class="las la-clipboard-check"></span>
                             <small>INVENTARIO</small>
                         </a>
                     </li>

                     <li>
                        <a href="catalogo" target="3">
                             <span class="las la-clipboard-check"></span>
                             <small>CATALOGO</small>
                         </a>
                     </li>

                     <li>
                        <a href="proveedor" target="3">
                             <span class="las la-truck"></span>
                             <small>PROVEEDOR</small>
                         </a>
                     </li>

                     <li>
                        <a href="pedido" target="3">
                             <span class="las la-coins"></span>
                             <small>PEDIDOS</small>
                         </a>
                     </li>
                </ul>
            </div>
        </div>
    </div>
</body>
    </html>

<!--agregar productos-tarjetas regalo -agregar usuario*/-->