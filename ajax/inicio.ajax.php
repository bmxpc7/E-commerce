<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
require_once "../controladores/inicio.controlador.php";
require_once "../modelos/inicio.modelo.php";
if (isset($_POST['metodo'])) {
    if($_POST["metodo"] == "mostrarPiezas"){
        $respuesta = controladorInicio::ctrMostrarPiezas();
    }else if($_POST["metodo"] == "iniciarSesion"){
        $respuesta = controladorInicio::ctrIngresoUsuario($_POST["user"],$_POST["pass"]);
    }
} else{
    
}