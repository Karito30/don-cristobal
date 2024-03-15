<?php

echo '<meta charset="UTF-8">';
$conexion=mysqli_connect('localhost:3307','root','', 'don_cristobal');
$consulta="SELECT * FROM RECIBO_VENTA;";
header("content-Type: application/vnd.ms-excel charset=iso-8859-1");
header("content-Disposition: attachment; filename=datos-recibo.xls");


?>
<table>
    <caption>Datos de los Recibos</caption>
    <tr>
        <th>ID Recibo</th>
        <th>Fecha recibo</th>
        <th>Valor</th>
        <th>IVA</th>
        <th>Cantidad</th>
        <th>Mesa</th>
        <th>ID Empleado</th>
        <th>ID Producto</th>
        <th>ID Metodo Pago</th>
    </tr>

    <?php 
    $resultado=mysqli_query($conexion, $consulta);

    while ($filas=mysqli_fetch_assoc($resultado))
    {?>
      <tr>
        <td><?php  echo $filas["ID_RECIBO"]; ?></td>
        <td><?php  echo $filas["FECHA_RECIBO"]; ?></td>
        <td><?php  echo $filas["VALOR_RECIBO"]; ?></td>
        <td><?php  echo $filas["IVA_RECIBO"]; ?></td>
        <td><?php  echo $filas["CANT_RECIBO"]; ?></td>
        <td><?php  echo $filas["MESA"]; ?></td>
        <td><?php  echo $filas["ID_EMPLEADO_FK_VENTA"]; ?></td>
        <td><?php  echo $filas["ID_PRODUCTO_FK_VENTA"]; ?></td>
        <td><?php  echo $filas["ID_METODO_PAGO_FK_VENTA"]; ?></td>
       </tr>
       <?php } ?>
</table>