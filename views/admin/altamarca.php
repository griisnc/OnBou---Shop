<?php
include("configtienda.php");
session_start();
$usuario=$_SESSION['email'];
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
            <h2>ALTA DE MARCAS</h2>
        </div>
    </div>
	<div class="container">
        <div class="columns">
            <div class="column">
                
				<div class="container">
					<div class="columns">
						<div class="column is-half">
							<br><br>
							<img src="img/marca.PNG" alt="">
						</div>
						<div class="column is-half">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="post">
								<center><h2 class="is-size-4">Tabla Marca</h2></center>
								<br>
								
								<div class="input-group mb-3">
								<span class="input-group-text">Marca: </span>
								<input type="text" name="nombre_marca" placeholder="Nombre de la marca" class="form-control" aria-label="Amount (to the nearest dollar)" require>
								
								</div>

								
								<center><button type="submit" name="enviarAM" class="btn btn-default btn-primary">Eviar datos</button><br></center>
<?php
include("configtienda.php");

if(isset($_POST['enviarAM'])){
	if( isset($_POST['nombre_marca']) && $_POST['nombre_marca']!="")
	{
			$nombre_Marca=$_POST['nombre_marca'];

			$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion".mysql_error());
			if($conexion)
			{
				//echo "Se conecto exitosamente<br>";
				mysqli_select_db($conexion,"tiendaropa") or die("Problemas en la seleccion de la base de datos");
				//echo "Se conecto exitosamente a bd<br>";
				//inserto la marca
				$query="INSERT INTO marca(nombre_marca) VALUES ('$nombre_Marca')";
				//echo "La consulta generada es: <br>".$query."<br>";
				if(mysqli_query($conexion,$query))
				{
					echo'<br>';
					echo'<div class="alert alert-success" role="alert">';
					echo'Datos Guardados';
					echo'</div>';
				}
				else echo "error<br>";
				mysqli_close($conexion);
			}
	}else{
		echo'<br>';
		echo'<div class="alert alert-danger" role="alert">';
		echo'Faltan datos';
		echo'</div>';
	} 
}//else echo "no dio clic en enviar";
?>
							</form>
						</div>
					</div>
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