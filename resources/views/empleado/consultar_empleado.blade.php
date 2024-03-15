<?php 

$codigo=$_POST['id_empleado'];

$conexion=mysqli_connect('127.0.0.1','root','Mariposanegra_23', 'proyecto_bar');
$consulta="SELECT * FROM EMPLEADO WHERE ID_EMPLEADO='$codigo';";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

echo '<link rel="stylesheet" href="tabla.css">
      <body>
      <div id="main-container">';

echo '<table border=1>';
echo '<tr><th>ID EMPLEADO</th><th>FECHA DE NACIMIENTO</th><th>NOMBRE</th><th>CARGO</th></tr>';

 while ($filas=mysqli_fetch_row($resultado))
{
    echo '<tr><td>'.$filas[0].'</td><td>'.$filas[1].'</td><td>'.$filas[2].'</td><td>'.$filas[3].'</td></tr>';
}

echo '</table><br>';

echo '<div class="submit-button">
          <button class="button "><a href="consultar_empleado.html">Volver</a></button>
      </div>';
echo '</div>
      </body>';
?>