<?php
include("config.php");
$conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
mysqli_select_db($conexion, $database) or die("Hubo un error");
$query = "UPDATE cuentas SET correo='$_POST[correo]', contraseña='$_POST[contraseña]' WHERE correo='$_POST[correo]';";
echo $result = mysqli_query($conexion, $query);
mysqli_close($conexion);
?>