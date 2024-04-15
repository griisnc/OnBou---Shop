<?php
include("config.php");
$conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
mysqli_select_db($conexion, $database) or die("Hubo un error");
$query = "DELETE FROM cuentas WHERE id_Cuenta=$_POST[id];";
echo $result = mysqli_query($conexion, $query);
mysqli_close($conexion);
?>