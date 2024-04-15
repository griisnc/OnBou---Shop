<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
	
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
	<title>altaPrenda</title>
</head>

<body>
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
            <h2>ALTA DE PRENDAS</h2>
        </div>
    </div>
	<div class="container">
        <div class="columns">
            <div class="column">
                
				<div class="container">
					<div class="columns">
						<div class="column is-half">
							<br><br>
							<img src="img/ropaColgada.jpg" alt="">
						</div>
						<div class="column is-half">
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" METHOD="post">
								<center><h2 class="is-size-4">Tabla Prenda</h2></center>
								<br>
								
								<div class="input-group mb-3">
								<span class="input-group-text">Precio: $</span>
								<input type="entero" name="precio" placeholder="Precio" class="form-control" aria-label="Amount (to the nearest dollar)" require>
								
								</div>
								
								<div class="input-group input-group-sm mb-3">
								<span class="input-group-text" id="inputGroup-sizing-sm">Cantidad </span>
								<input type="entero" name="cantidad" placeholder="Cantidad" class="form-control" aria-label="Sizing example input" placeholder="Id Prenda" aria-describedby="inputGroup-sizing-sm" require>
								</div>

								<?php
									$conexion = mysqli_connect("localhost","root","") or die ("error en la conexion");
									if($conexion)
										{
											mysqli_select_db($conexion,"tiendaropa") or die("ERROR bd");
											$query="SELECT * FROM marca;";
											$registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
											echo'<div class="input-group mb-3">';
											echo'<label class="input-group-text" for="inputGroupSelect01">Marca</label>';
											echo'<select class="form-select" id="inputGroupSelect01"  name="nombre_marca" required>';
											echo'<option selected>Selecciona una opción</option>';
											while($tupla=mysqli_fetch_array($registros))
											{
												echo "<option value=".$tupla['nombre_marca'].">".$tupla['nombre_marca']."</option>";
											}
										}	
											mysqli_close($conexion);
											echo'</select>';
											echo'</div>';
								
									$conexion = mysqli_connect("localhost","root","") or die ("error en la conexion");
									if($conexion)
										{
											mysqli_select_db($conexion,"tiendaropa") or die("ERROR bd");
											$query="SELECT * FROM talla;";
											$registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
											echo'<div class="input-group mb-3">';
											echo'<label class="input-group-text" for="inputGroupSelect01">Talla</label>';
											echo'<select class="form-select" id="inputGroupSelect01"  name="numero_Talla" required>';
											echo'<option selected>Selecciona una opción</option>';
											while($tupla=mysqli_fetch_array($registros))
											{
												echo "<option value=".$tupla['numero_Talla'].">".$tupla['numero_Talla']."</option>";
											}
											mysqli_close($conexion);
											echo'</select>';
											echo'</div>';
										}
									
									
									$conexion = mysqli_connect("localhost","root","") or die ("error en la conexion");
									if($conexion)
										{
											mysqli_select_db($conexion,"tiendaropa") or die("ERROR bd");
											$query="SELECT * FROM departamento;";
											$registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
											echo'<div class="input-group mb-3">';
											echo'<label class="input-group-text" for="inputGroupSelect01">Departamento</label>';
											echo'<select class="form-select" id="inputGroupSelect01"  name="nombre_Departamento" required>';
											echo'<option selected>Selecciona una opción</option>';
											
											while($tupla=mysqli_fetch_array($registros))
											{
												echo "<option value=".$tupla['nombre_Departamento'].">".$tupla['nombre_Departamento']."</option>";
											}
											mysqli_close($conexion);
											echo'</select>';
											echo'</div>';
										}
									
									$conexion = mysqli_connect("localhost","root","") or die ("error en la conexion");
									if($conexion)
										{
											mysqli_select_db($conexion,"tiendaropa") or die("ERROR bd");
											$query="SELECT * FROM proveedor;";
											$registros=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
											
											echo'<div class="input-group mb-3">';
											echo'<label class="input-group-text" for="inputGroupSelect01">Proveedor</label>';
											echo'<select class="form-select" id="inputGroupSelect01"  name="nombre_Proveedor" required>';
											echo'<option selected>Selecciona una opción</option>';
											while($tupla=mysqli_fetch_array($registros))
											{
												echo "<option value=".$tupla['nombre_Proveedor'].">".$tupla['nombre_Proveedor']."</option>";
											}
											mysqli_close($conexion);
											echo'</select>';
											echo'</div>';
										}
										echo'<div class="input-group mb-3">';
										echo'<input type="file" name="img_prenda" class="form-control" id="inputGroupFile02">';
										
										echo'</div>';	
									
								?>
								
								<center><button type="submit" name="enviarAP" class="btn btn-default btn-primary">Guardar</button><br></center>
<?php
include("database/config.php");

if(isset($_POST['enviarAP'])){
	$img=$_FILES['img_prenda']['name'];
	if(isset($_POST['precio']) && isset($_POST['cantidad']) && isset($_POST['nombre_marca']) && isset($_POST['numero_Talla']) && isset($_POST['nombre_Departamento']) && isset($_POST['nombre_Proveedor']) && isset($_FILES['img_prenda']) && $_POST['precio']>0 && $_POST['cantidad']>0)
	{
			
			$precio=$_POST['precio'];
			$cantidad=$_POST['cantidad'];
			$nombre_Marca=$_POST['nombre_marca'];
			$numero_Talla=$_POST['numero_Talla'];
			$nombre_Departamento=$_POST['nombre_Departamento'];
			$nombre_Proveedor=$_POST['nombre_Proveedor'];

			$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion".mysql_error());
			if($conexion)
			{
				//echo "Se conecto exitosamente<br>";
				mysqli_select_db($conexion,"tiendaropa") or die("Problemas en la seleccion de la base de datos");
				
				
				$query="SELECT id_Marca FROM marca WHERE nombre_marca='".$nombre_Marca."';";
				$reg=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
				$tupla=mysqli_fetch_array($reg);
				$id_Marca=$tupla['id_Marca'];
				
				$query="SELECT id_Talla FROM talla WHERE numero_Talla='".$numero_Talla."';";
				$reg=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
				$tupla=mysqli_fetch_array($reg);
				$id_Talla=$tupla['id_Talla'];
				
				$query="SELECT id_Departamento FROM departamento WHERE nombre_Departamento='".$nombre_Departamento."';";
				$reg=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
				$tupla=mysqli_fetch_array($reg);
				$id_Departamento=$tupla['id_Departamento'];
				
				$query="SELECT id_Proveedor FROM proveedor WHERE nombre_Proveedor='".$nombre_Proveedor."';";
				$reg=mysqli_query($conexion,$query) or die("error query ".mysqli_error());
				$tupla=mysqli_fetch_array($reg);
				$id_Proveedor=$tupla['id_Proveedor'];


				$tipo = $_FILES['img_prenda']['type'];
				$tamano = $_FILES['img_prenda']['size'];
				$temp = $_FILES['img_prenda']['tmp_name'];
				//Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
				if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
					echo'<br>';
					echo'<div class="alert alert-danger" role="alert">';
					echo'Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.';
					echo'</div>';
				}
				else{

					//inserto la prenda
					$query="INSERT INTO prenda(precio,cantidad,id_Marca,id_Talla,id_Departamento,id_Proveedor,img_prenda,tipo_img) VALUES ('$precio','$cantidad','$id_Marca','$id_Talla','$id_Departamento','$id_Proveedor','$img','$tipo')";
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