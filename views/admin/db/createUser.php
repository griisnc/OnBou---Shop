<?php
include("config.php");
$conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
mysqli_select_db($conexion, $database) or die("Hubo un error");
$query = "INSERT INTO cuentas(correo, contraseña, id_Rol) VALUES ('$_POST[correo]', '$_POST[contraseña]' , '$_POST[id_Rol]');";
echo $result = mysqli_query($conexion, $query);
mysqli_close($conexion);

$conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
mysqli_select_db($conexion, $database) or die("Hubo un error");
$query2 = "SELECT * FROM cuentas WHERE correo = '$_POST[correo]'";
$result1 = mysqli_query($conexion, $query2) or die("Hubo un error durante la consulta");
$user = mysqli_fetch_array($result1);
$a = $user[0];
$query1 = "INSERT INTO cliente(nombre_Cliente, direccion, id_Cuenta) VALUES ('$_POST[nombre]','$_POST[direccion]',$a);";
$result2 = mysqli_query($conexion, $query1);
mysqli_close($conexion);
?>