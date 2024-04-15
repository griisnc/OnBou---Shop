<?php
include("../../database/config.php");
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../../login.php");
}
if ($_SESSION['id'] != 1) {
    header("location: ../../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script src="jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <script src="alertify.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/default.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dataTable.css">
    <title>OnBou Administration</title>
</head>

<body>
    <div class="what bg-li py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <h2 style="text-align: center;">APARTADO CUENTAS ADMINISTRADOR</h2>
            <div class="row about-bottom-w3l text-center mt-4 justify-content-center">
                <table class="table table-hover table-condensed table-bordered" id="tabla2">
                    <caption>
                        <button class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target="#newAdminModal" data-dismiss="modal" data-backdrop="false">Agregar usuario</button>
                    </caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>rol_id</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../../database/config.php");
                        $conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
                        mysqli_select_db($conexion, $database) or die("Hubo un error");
                        $query = "SELECT * FROM cuentas WHERE id_Rol = 1;";
                        $result = mysqli_query($conexion, $query);
                        while ($datos = mysqli_fetch_array($result)) {
                            $info = $datos[0] . "||" . $datos[1] . "||" . $datos[2] . "||" . $datos[3];
                            $eli = $datos[0];
                        ?>
                            <tr>
                                <td><?php echo $datos[0] ?></td>
                                <td><?php echo $datos[1] ?></td>
                                <td><?php echo $datos[2] ?></td>
                                <td><?php echo $datos[3];
                                    if ($datos[3] == 1) {
                                        print " - admin";
                                    } else {
                                        print " - cliente";
                                    } ?></td>
                                <td>
                                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionUser" onclick="agregaFormUser('<?php echo $info ?>')" data-dismiss="modal" data-backdrop="false">Editar</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="validacion('<?php echo $eli ?>')">Eliminar</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Correo:</label>
                    <input type="mail" id="newAdminEmail" class="form-control input-sm">
                    <label>Contraseña:</label>
                    <input type="text" id="newAdminPass" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="createAdmin">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Correo:</label>
                    <input type="mail" id="uptAdminEmail" class="form-control input-sm">
                    <label>Contraseña:</label>
                    <input type="text" id="uptAdminPass" class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="updateAdmin">Actualizar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="what bg-li py-5" id="what">
        <div class="container py-xl-5 py-lg-3">
            <h2 style="text-align: center;">APARTADO CUENTAS</h2>
            <div class="row about-bottom-w3l text-center mt-4 justify-content-center">
                <table class="table" id="tabla1">
                    <caption>
                        <button class="btn btn-primary glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalNuevoUser" data-dismiss="modal" data-backdrop="false">Agregar usuario</button>
                    </caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>rol_id</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../../database/config.php");
                        $conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
                        mysqli_select_db($conexion, $database) or die("Hubo un error");
                        $query = "SELECT id_Cliente, nombre_Cliente, cuentas.correo, cuentas.contraseña, cuentas.id_Rol, cuentas.id_Cuenta FROM cliente INNER JOIN cuentas ON cuentas.id_Cuenta = cliente.id_Cuenta;";
                        $result = mysqli_query($conexion, $query);
                        while ($datos = mysqli_fetch_array($result)) {
                            $info = $datos[0] . "||" . $datos[1] . "||" . $datos[2] . "||" . $datos[3] . "||" . $datos[4] . "||" . $datos[5];
                            $eli = $datos[5];
                        ?>
                            <tr>
                                <td><?php echo $datos[0] ?></td>
                                <td><?php echo $datos[1] ?></td>
                                <td><?php echo $datos[2] ?></td>
                                <td><?php echo $datos[3] ?></td>
                                <td><?php echo $datos[4];
                                    if ($datos[4] == 1) {
                                        print " - admin";
                                    } else {
                                        print " - cliente";
                                    } ?></td>
                                <td>
                                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionUser" onclick="agregaFormUser('<?php echo $info ?>')" data-dismiss="modal" data-backdrop="false">Editar</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger glyphicon glyphicon-remove" onclick="validacion('<?php echo $eli ?>')">Eliminar</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <form action="database/historialUser.php" method="post">
                Ver compras por nombre:
                <input type="text" name="buscadorTexto" class="form-control">
                <input type="submit" value="buscador" class="btn btn-primary mb-2">
            </form>
        </div>
    </div>
    <div class="modal fade" id="modalNuevoUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agrega nueva tabla</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Nombre cliente:</label>
                    <input type="text" id="userN" class="form-control input-sm">
                    <label>Direccion cliente:</label>
                    <input type="text" id="userD" class="form-control input-sm">
                    <label>Correo:</label>
                    <input type="mail" id="userEmail" class="form-control input-sm">
                    <label>Contraseña:</label>
                    <input type="text" id="userPass" class="form-control input-sm">
                    <label>Escoja el rol de usuario:</label>
                    <select id="userRol" class="form-control form-control-lg">
                        <?php
                        include("../../database/config.php");
                        $conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
                        mysqli_select_db($conexion, $database) or die("Hubo un error");
                        $query = "SELECT id_Rol, rol FROM roles";
                        $result = mysqli_query($conexion, $query);
                        while ($datos = mysqli_fetch_array($result)) {
                            echo "<option value='{$datos['id_Rol']}'> {$datos['id_Rol']} - {$datos['rol']} </option>";
                        }
                        mysqli_close($conexion);
                        ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="createUser">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalEdicionUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Correo:</label>
                    <input type="mail" id="userEmailEdi" class="form-control input-sm">
                    <label>Contraseña:</label>
                    <input type="text" id="userPassEdi" class="form-control input-sm">
                    <label>Escoja el rol de usuario:</label>
                    <select id="userRolEdi" class="form-control form-control-lg">
                        <?php
                        include("../../database/config.php");
                        $conexion = mysqli_connect("localhost", $username, $password) or die("No se hizo la conexion");
                        mysqli_select_db($conexion, $database) or die("Hubo un error");
                        $query = "SELECT id_Rol, rol FROM roles";
                        $result = mysqli_query($conexion, $query);
                        while ($datos = mysqli_fetch_array($result)) {
                            echo "<option value='{$datos['id_Rol']}'> {$datos['id_Rol']} - {$datos['rol']} </option>";
                        }
                        mysqli_close($conexion);
                        ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="updateUser">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#tabla1').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $('#createUser').click(function() {
            nombre = $('#userN').val();
            direccion = $('#userD').val();
            correo = $('#userEmail').val();
            contraseña = $('#userPass').val();
            id_Rol = $('#userRol').val();
            createUser(nombre, direccion, correo, contraseña, id_Rol);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#updateUser').click(function() {
            updateUser();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#createAdmin').click(function() {
            nameA = $('#newAdminEmail').val();
            passA = $('#newAdminPass').val();
            alert(nameA + passA)
            createAdmin(nameA, passA);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#updateAdmin').click(function() {
            uptNameA = $('#uptAdminEmail');
            uptPassA = $('#uptAdminPass')
            updateAdmin(uptNameA, uptPassA);
        });
    });
</script>