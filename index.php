<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>EuroLatina Store</title>
  <link rel="shortcut icon" href="./img/icono.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="scss/style.scss" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="/E-commerce/">
        <img class="logo" src="./img/logo/logo.png" width="50px">
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
          <li class="nav-item btnIniciar">
            <a href="/E-commerce/vistas/perfil.php" class="nav-link waves-effect btnIniciar">
              <i class="fas fa-address-card btnIniciar"></i>
              <span class="clearfix d-none d-sm-inline-block" class="btnIniciar">Perfil</span>
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
  <!-- Navbar -->

  <!--Main layout-->
    <div class="Principal">

        <!--Grid row-->
        <div class="row contenidoPrincipal">

        </div>
        <!--Grid row-->
    </div>
    
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Copyright-->
    <div class="footer-copyright py-3 footer">
      <img class="logo" src="img/logo/logo.png" width="50px">
      <a href="https://mdbootstrap.com/education/bootstrap/"> EuroLatina Investment Trading </a>
    </div>
    <!--/.Copyright-->
  </footer>
  <!--/.Footer-->
<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <img src="img/logo/logo.png" style="margin-bottom: 3em;" width="100px">
        <div class="form-group">
    <h3 for="txtUsuario">Usuario</h3>
    <input type="text" class="form-control" id="txtUsuario">
    </div>
  <div class="form-group">
    <h3 for="txtPass">Contraseña</h3>
    <input type="password" class="form-control" id="txtPass">
  </div>
  <button type="submit" class="btn btn-warning text-dark">Iniciar Sesión</button>
  <hr>
  <p>¿No tienes cuenta? <a href="/E-commerce/vistas/registro.php" style="color:blue">Registrate</a></p>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <script src="js/index.js"></script>
</body>

</html>
