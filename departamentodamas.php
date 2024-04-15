<?php
include("database/config.php");
session_start();
$usuario=$_SESSION['email'];
if (!isset($_SESSION['email'])) {
    header("location: ../../login.php");
}
if ($_SESSION['id'] != 2) {
    header("location: ../../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css"> 
    <title>Departamento de Damas</title>
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
                <a class="navbar-mobile-link has-text-white" href="index.html">Avenue Fashion</a>
                <a class="navbar-mobile-link has-text-white" href="#"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
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
                    <li class="nav-menu-item" id="men">
                        <a class="nav-menu-link link-submenu" href="#">Hombre <i
                                class="zmdi zmdi-chevron-down"></i></a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                           
                        </div>
                    </li>
                    <li class="nav-menu-item" id="women">
                        <a href="#" class="nav-menu-link link-submenu">Mujer <i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">

                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                           
                        </div>
                    </li>
                    <li class="nav-menu-item"><a href="brand.html" class="nav-menu-link active">La Marca</a></li>
                    <li class="nav-menu-item"><a href="login.html" class="nav-menu-link">Registro</a></li>
                    <li class="nav-menu-item"><a href="login.html" class="nav-menu-link">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </nav>
    </header>
   <!-- Banner -->
   <div class="banner banner-second">
        <div class="banner-container ">
            <h1>Deapartamento de Damas</h1>
           
        </div>
    </div>
    <div class="container">
    <div class="columns is-multiline">
            <div class="column is-full-mobile">
                <div class="columns is-centered is-mobile is-multiline">

                    
<?php
    $conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion".mysql_error());
    if($conexion)
    {
            //echo "Se conecto exitosamente<br>";
            mysqli_select_db($conexion,"tiendaropa") or die("Problemas en la seleccion de la base de datos");
            $mostrarprendas="SELECT id_Prenda,  precio, cantidad, id_Marca,  id_Talla,  id_Departamento, id_Proveedor, img_prenda from prenda WHERE id_Departamento=1 order by cantidad desc";
           $filas=mysqli_query($conexion,$mostrarprendas);		
            if($filas)
                {
                    //echo'<Script> alert("Si se pudo"); </script>';
                    while($columnas=mysqli_fetch_assoc($filas))
                    {
                        $id_prenda=$columnas['id_Prenda'];
                        $precio=$columnas['precio'];
                        $cantidad=$columnas['cantidad'];
                        $id_marca=$columnas['id_Marca'];
                        $id_talla=$columnas['id_Talla'];
                        $id_departamento=$columnas['id_Departamento'];
                        $id_Proveedor=$columnas['id_Proveedor'];
                        $img_prenda="SELECT img_prenda from prenda where id_Prenda='$id_prenda'  ";   
                        //$img=$_FILES['img_prenda']['name'];  //nombre de la imagen
                       // $archivo=$_FILES['img_prenda']['tmp_name']; //contiene el archivo
                       // $ruta="img";
                        //$ruta=$ruta."/".$img;
                       // move_uploaded_file($archivo,$ruta);

                        $marca="SELECT nombre_marca from marca where id_marca='$id_marca' ";
                        $talla="SELECT numero_Talla from Talla where id_Talla='$id_talla' ";
                        $departamento = "SELECT nombre_Departamento from departamento WHERE id_Departamento='$id_departamento' ";
                        $proveedor= "SELECT nombre_Proveedor from Proveedor WHERE id_Proveedor='$id_Proveedor' ";
                        $save=mysqli_query($conexion,$img_prenda);
                        $savea=mysqli_query($conexion,$marca);
                        $savec=mysqli_query($conexion,$talla);
                        $save3=mysqli_query($conexion,$departamento);
                        $save4=mysqli_query($conexion,$proveedor);
                       
                        $fila2=mysqli_fetch_assoc($save);
                        $fila3=mysqli_fetch_assoc($savea);
                        $fila4=mysqli_fetch_assoc($savec);
                        $fila5=mysqli_fetch_assoc($save3);
                        $fila6=mysqli_fetch_assoc($save4);
                       
                        $foto=$fila2['img_prenda'];
                        $nmarca=$fila3['nombre_marca'];
                        $ntalla=$fila4['numero_Talla'];
                        $ndto=$fila5['nombre_Departamento'];
                        $nproveedor=$fila6['nombre_Proveedor'];

                      echo'  <div class="column is-half column-full">';
                     echo'   <div class="card">';
                      echo'      <span class="price">$ '.$columnas['precio'].'</span>';
                      echo'      <img src="img/item-2.png" alt="">';
                      echo'      <div class="card-info">';
                      echo'          <h4 class="has-text-black has-text-cente00red has-text-weight-bold">Departamento: '.$ndto.', Precio: $ '.$columnas['precio'].' </h4>';
                       echo'         <p class="has-text-centered"> Marca: '.$nmarca.', Talla: '.$ntalla.', Precio: $ '.$columnas['precio'].', Proveedor: '.$nproveedor.'</p>';
                      echo'          <div class="card-buttons">';
                      echo'              <a href="#" class="btn btn--mini-rounded"><i class="zmdi zmdi-shopping-cart"></i></a>';
                       echo'             <a href="#" class="btn btn--mini-rounded"><i class="zmdi zmdi-favorite-outline"></i></a>';
                       echo'             <a href="producto.html" class="btn btn--mini-rounded"><i class="zmdi zmdi-eye"></i></a>';
                       echo'         </div>';
                    echo'         </div>';
                echo'         </div>';
            echo'         </div>';
                     }
               
                     mysqli_close($conexion);
            }
    }
 ?>   
    </div>
  



    <footer class="footer">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Información</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">La marca</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Local stores</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Servicios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Mapa del sitio</a></li>
                    </ul>
                </div>

                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Porqué comprar</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios y retornos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios seguros</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Testimonios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Award waining</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Etival trading</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Tu cuenta</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Iniciar sesión</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Registro</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver carrito </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver catálogo</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Track an order</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Catalogo</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para hombres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column is-full">
                    <div class="footer-socials">
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar-top">
            <div class="container">
                <a class="footer-bar-top-links" href="#">2022 Online Boutique</a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>