<?php
require_once "../controladores/inicio.controlador.php";
require_once "../modelos/inicio.modelo.php";
if (isset($_POST['metodo'])) {
    if($_POST["metodo"] == "mostrarPiezas"){
        $respuesta = controladorInicio::ctrMostrarPiezas();
    }
} else {
    
}