<?php
require_once "../modelos/pieza.modelo.php";
class ControladorPieza{
    /*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarPieza($id){

		$respuesta = modeloPieza::mdlMostrarPieza($id);

		return $respuesta;
	}
}