<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../scss/registro.scss" rel="stylesheet">
</head>
<body>
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
            <span class="badge orange z-depth-1 mr-1"> 1 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Carrito </span>
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
<div class="contenedor" style="margin-top: 8%;">
<div class="ladoIzquierdo">
    <div class="card" style="width: 36rem; height: 620px;">
  <div class="card-body">
      <form method="post">
      <div class="form-group row">
    <div class=col-2><label for="txtCorreo">Nombre</label></div>
    <input type="text" class="form-control col-4" id="txtNombre">
    <div class="col-2"><label for="txtCorreo">Usuario</label></div>
    <input type="text" class="form-control col-4" id="txtUsuario">
  </div>
  <div class="form-group">
    <label for="txtCorreo">Contraseña</label>
    <input type="password" class="form-control" id="txtContrasena">
  </div>
  <div class="form-group">
    <label for="txtCorreo">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="txtConfirmarContrasena">
  </div>
  <div class="form-group">
    <label for="txtCorreo">Foto</label>
    <input class="form-control" type="file" name="" id="imgFoto">
  </div>
  <div class="form-group row">
    <div class="col-2"><label for="txtCorreo">Telefono</label></div>
    <input type="tel" class="form-control col-4" id="txtTelefono">
    <div class="col-2"><label for="txtCorreo">Correo</label></div>
    <input type="email" class="form-control col-4" id="txtCorreo">
  </div>
      <div class="form-group row">
      
  </div>
  <div class="form-group">
    <label for="txtDireccion">Direccion</label>
    <textarea type="text" class="form-control" id="txtDireccion" cols="20" rows="3"></textarea>
  </div>
  <button type="submit" class="btn">Actualizar Información</button>
      </form>
  </div>
</div>
</div>
<div class="ladoDerecho">
    <img class="imagen" src="../img/portada.png">
</div>
</div>
</body>
</html>