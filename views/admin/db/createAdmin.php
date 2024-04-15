<?php
include("config.php");
$conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
mysqli_select_db($conexion, $database) or die("Hubo un error");
$query = "INSERT INTO cuentas(correo, contraseña, id_Rol) VALUES ('$_POST[correo]', '$_POST[contraseña]' , 1);";
echo $result = mysqli_query($conexion, $query);
mysqli_close($conexion);
?>