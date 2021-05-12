<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>EuroLatina Store</title>

  <link rel="shortcut icon" href="../img/icono.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../scss/style.scss" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="/E-commerce/">
        <img class="logo" src="../img/logo/logo.png" width="50px">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="/E-commerce/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1"> 1 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
          <li class="nav-item btnIniciar">
            <a class="nav-link waves-effect btnIniciar">
              <i class="fas fa-user btnIniciar"></i>
              <span class="clearfix d-none d-sm-inline-block" class="btnIniciar"> Iniciar Sesión </span>
            </a>
          </li>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </ul>
      </div>

    </div>
  </nav>
  <!--Main layout-->
  <main class="mt-5 pt-4">
    
<?php 
require_once "../controladores/pieza.controlador.php";
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$id= htmlspecialchars($_GET["id"]);
$colores = array();
$hex = array();
$tallas = array();
$mostrarPieza = ControladorPieza::ctrMostrarPieza($id);

foreach ($mostrarPieza as $key => $value){
  array_push($colores,$value["color"]);
  array_push($tallas, $value["talla"]);
  array_push($hex, $value["hexadecimal"]);
}
$coloresFinal = array_unique($colores);
$tallasFinal = array_unique($tallas);
$hexFinal = array_unique($hex);
?>

    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img id="imgProducto" src=<?php echo "../".$mostrarPieza[0]["foto"]?> class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

          <h1 id="nombrePieza"><?php echo $mostrarPieza[0]["nombre"]?></h1>
            <p class="lead">
              <span id="precioPieza">$<?php echo $mostrarPieza[0]["precio"]?></span>
            </p>

            <p class="lead font-weight-bold" >Descripción</p>

            <p id="descripcionPieza"><?php echo $mostrarPieza[0]["descripcion"]?></p>
            <h3>Colores Disponibles</h3>
            <?php
            for ($i=0; $i < count($coloresFinal)+count($coloresFinal); $i++) {
              if(array_key_exists($i,$coloresFinal)){
            ?>
            <div><button class="inputColores" id=<?php echo $coloresFinal[$i]?> type="button" <?php echo 'style=" display: inline-block; border: 2px solid grey; border-radius: 50%;width: 50px; height:50px;background:'.$hexFinal[$i].'"'?> onclick="addColor(event)"></button></div>
            <?php
            }}?>
            <hr>
            <h3>Talla</h3>
            <?php
            for ($j=0; $j < count($tallasFinal)+2; $j++) {
              if(isset($tallasFinal[$j])?$tallasFinal[$j]:null){
                echo ' <div class="form-check-inline talla">'.
                '<input class="form-check-input" type="checkbox" onchange="addTalla(event)" value="" id="'.$tallasFinal[$j].'">'.
                '<label class="form-check-label" for="'.$tallasFinal[$j].'">'.$tallasFinal[$j].'</label>'.
                '</div>';
              }
            ?>
            <?php
            }
            ?>
<hr>
            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" id="btnAgregarCarrito" type="button">Agregar al carrito
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Otros Productos</h4>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2021 Copyright:
      <p>EuroLatina Investment Trading</p>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
<!-- Modal -->
<div class="modal fade" id="modalAfterCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Guardar en Carrito</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script type="text/javascript" src="../js/pieza.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
