<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bulma.min.css">
    <link rel="stylesheet" href="../../css/material-design-iconic-font.css">
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/styles.css"> 
    <title>Index</title>
</head>

<body>
    
    <!-- Barra de navegación -->
    <header>
		<nav class="navbar-top">
            <ul class="navbar-top-ul">
                <li class="navbar-top-item">
                    <?php
                    echo '<p class="navbar-top-links">Bienvenido '.$usuario.'</p>';
                    ?>
                </li>
                <li class="navbar-top-item">
                    <a href="login.php" class="navbar-top-links">Cerrar sesión</a>
                </li>
                <li class="navbar-top-item">
                    <a href="#" class="navbar-top-links">
                        <i class="zmdi zmdi-shopping-cart"></i> Carrito
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar">
            <header class="nabvar-mobile is-size-5-mobile">
                <a class="navbar-mobile-link has-text-white" href="#" id="btn-mobile"><i class="zmdi zmdi-menu"></i></a>
                <a class="navbar-mobile-link has-text-white" href="#">Online Boutique</a>
                <a class="navbar-mobile-link has-text-white" href="index.html"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
            </header>
            <nav class="nav-menu --nav-dark-light" id="mySidenav">
                <form class="form-group " action="#">
                    <div class="form-group-container">
                        <span class="form-group-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-group-input" placeholder="Buscar...">
                    </div>
                </form>

                <a class="is-hidden-mobile brand is-uppercase has-text-weight-bold has-text-dark" href="index.html">Online Boutique</a>
                <ul class="nav-menu-ul">
                    <li class="nav-menu-item" id="women">
                        <a href="#" class="nav-menu-link link-submenu">Prenda<i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
									<li class="nav-menu-item"><a class="nav-menu-link" href="altaPrenda.php">Altas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="bajaPrenda.php">Bajas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="consultaPrenda.php">Consultas</a></li>
									
                                </li>
                            </ul>
                        </div>
					</li>
					<li class="nav-menu-item" id="women">
						<a href="#" class="nav-menu-link link-submenu">Marca<i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
									<li class="nav-menu-item"><a class="nav-menu-link" href="altaMarca.php">Altas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="bajaMarca.php">Bajas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="consultaMarca.php">Consultas</a></li>
									
                                </li>
                            </ul>
                        </div>
					</li>
					<li class="nav-menu-item" id="women">
						<a href="#" class="nav-menu-link link-submenu">Talla<i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="altaTalla.php">Altas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="bajaTalla.php">Bajas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="consultaTalla.php">Consultas</a></li>
									
                                </li>
                            </ul>
                        </div>
					</li>
					<li class="nav-menu-item" id="women">
						<a href="#" class="nav-menu-link link-submenu">Departamento<i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <li class="nav-menu-item"><a class="nav-menu-link" href="altaDepartamento.php">Altas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="bajaDepartamento.php">Bajas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="consultaDepartamento.php">Consultas</a></li>
									
                                </li>
                            </ul>
                        </div>
					</li>
					<li class="nav-menu-item" id="women">
						<a href="#" class="nav-menu-link link-submenu">Provedor<i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="altaProveedor.php">Altas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="bajaProveedor.php">Bajas</a></li>
									<li class="nav-menu-item"><a class="nav-menu-link" href="consultaProveedor.php">Consultas</a></li>
									
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-menu-item"><a href="index.php" class="nav-menu-link">Inicio</a></li>
                </ul>
            </nav>
        </nav>
    </header>
	<!-- Banner -->
    <div class="banner banner-registro">
        <div class="banner-container ">
            <h1>ONBOU</h1>
            <h2>TABLA TALLA</h2>
        </div>
    </div>
	<div class="container">
        <div class="columns">
            <div class="column">
				<div class="container">
					<br>
<?php
include("configtienda.php");
$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion".mysql_error());
if($conexion)
{
	mysqli_select_db($conexion,"tiendaropa") or die("ERROR bd");
	$query="SELECT * FROM talla;";
	$registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
	echo '<table class="table table-striped table-hover">';
	echo '<thead>';
	echo '<th scope="col">Id Talla</th>';
	echo '<th scope="col">Talla</th>';
	echo '</thead>';
	echo '<tbody>';
	
	while($tupla=mysqli_fetch_array($registros))//recupera cada registro en la variable tupla, mientras pueda acceder al registro va a imprimir cada uno de estos (tupla se comporta como un arreglo de asociativas)
	{
		echo "<tr><td>".$tupla['id_Talla']."</td>";
		echo "<td>".$tupla['numero_Talla']."</td></tr>";
	}
	echo '</tbody>';
	echo '</table>';
	mysqli_close($conexion);
}
?>
				</div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer">
        <div class="footer-bar-top">
            <div class="container">
                <a class="footer-bar-top-links" href="#">2022 ONBOU</a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>