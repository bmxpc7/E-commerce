<?php

require_once "conexion.php";

class modeloRegistro{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlRegistrarCliente($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, usuario, password, correo) VALUES (:nombre, :usuario, :password, :correo)");
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";	

		}else{

			return "error";
		
		}
		
		$stmt = null;

	}
}