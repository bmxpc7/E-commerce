<?php
require_once "../modelos/registro.modelo.php";
class ControladorPieza{
    /*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarPieza($id){

		$tabla = "pieza";

		$respuesta = modeloPieza::mdlMostrarPieza($tabla,$id);

		echo json_encode($respuesta);
	}
}