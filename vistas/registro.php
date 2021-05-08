<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EuroLatina Store</title>
  <link rel="shortcut icon" href="../img/icono.ico">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../scss/registro.scss" rel="stylesheet">
  
</head>
<body>
  <?php
  require_once "../controladores/registro.controlador.php";
?>
<div class="contenedor">
    <div class="card">
  <div class="card-body">
      <form method="post">
      <img class="logoForm" src="../img/logo/logo.png" alt="logo">
      <hr>
      <div class="form-group">
    <label for="txtNombre">Nombre</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre">
    </div>
    <div class="form-group">
    <label for="txtUsuario">Usuario</label>
    <input type="text" class="form-control" name="txtUsuario" id="txtUsuario">
  </div>
  <div class="form-group">
    <label for="txtContrasena">Contraseña</label>
    <input type="password" class="form-control" name="txtContrasena" id="txtContrasena">
  </div>
  <div class="form-group">
    <label for="txtCorreo">Correo</label>
    <input type="email" class="form-control" name="txtCorreo" id="txtCorreo">
  </div>
  <hr>
  <button type="submit" class="btn">Registrar</button>
  <hr>
  <?php
            $crearCliente = new ControladorRegistro();
            $crearCliente -> ctrCrearCliente();
          ?>
      </form>
  </div>
  <p>o</p>
  <a href="/E-commerce/">Regresar al Inicio</a>
</div>
</div>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark">EuroLatina Investment Trading</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"></script>
</body>
<!-- <script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/registro.js"></script> -->
</html>