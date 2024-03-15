<?php

$host = "127.0.0.1"; // Cambia esto a tu servidor de base de datos
$dbname = "don_cristobal"; // Cambia esto al nombre de tu base de datos
$username = "root"; // Cambia esto a tu nombre de usuario de la base de datos
$password = ""; // Cambia esto a tu contraseña de la base de datos

$correo = $_POST['correo'];
$clave = $_POST['clave'];

$conexion = mysqli_connect ($host, $username, $password, $dbname);

$consulta ="SELECT ID_USUARIO FROM USUARIO WHERE EMAIL_USUARIO='$correo' AND CONT_USUARIO='$clave';";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0)
{
        while($filas=$resultado->fetch_array())
        {
            $perfil = $filas['ID_USUARIO'];
        }
        switch($perfil)
        {
            case 3001:
                echo "<script>alert('Bienvenido al sistema Administrador');
                location.href='union';
                </script>";
            break;

            case 3002:
                echo "<script>alert('Bienvenid@ al sistema Vendedor');
                location.href='secretaria';
                </script>";
            break;

            case 3003:
                echo "<script>alert('Bienvenido al sistema Administrador');
                location.href='union.html';
                </script>";
            break;

            default:
                echo "<script>alert('Error de perfil');
                location.href='diseño web/pagina.html';
                </script>";
            break;
        }
}
else 
{
    echo "<script>alert('No hay usuario registrado');
            location.href='iniciar.html';
        </script>";
}

?>