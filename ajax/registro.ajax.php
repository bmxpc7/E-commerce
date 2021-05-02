<?php
require_once "../controladores/registro.controlador.php";
require_once "../modelos/registro.modelo.php";
if (isset($_POST['metodo'])) {
    if($_POST["metodo"] == "registrarCliente"){
        $respuesta = ControladorRegistro::ctrCrearCliente();
    }
} else {
}