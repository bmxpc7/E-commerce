<?php

class controladorInicio{

	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarPiezas(){

		$tabla = "pieza";

		$respuesta = modeloInicio::mdlMostrarPiezas($tabla);

		echo json_encode($respuesta);
	}
}