<?php

echo '<meta charset="UTF-8">';
$conexion=mysqli_connect('localhost:3307','root','', 'don_cristobal');
$consulta="SELECT * FROM EMPLEADO;";
header("content-Type: application/vnd.ms-excel charset=iso-8859-1");
header("content-Disposition: attachment; filename=datos-Empleados.xls");

            ?>
            <table>
            <caption>Datos de los Empleados</caption>
            <tr>
            <th>ID empleado</th>
            <th>Fecha de nacimiento</th>
            <th>Nombre</th>
            <th>Cargo</th>
            </tr>

            <?php 
                $resultado=mysqli_query($conexion, $consulta);

                while ($filas=mysqli_fetch_assoc($resultado))
                {?>
                    <tr>
                    <td><?php  echo $filas["ID_EMPLEADO"]; ?></td>
                    <td><?php  echo $filas["FECHA_NA_EMPLEADO"]; ?></td>
                    <td><?php  echo $filas["NOM_EMPLEADO"]; ?></td>
                    <td><?php  echo $filas["NOMBRE_CARGO"]; ?></td>
                    </tr>
                <?php } ?>
            </table>