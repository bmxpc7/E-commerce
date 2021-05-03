<?php

require_once "conexion.php";

class modeloInicio{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarPieza($id){

			$stmt = Conexion::conectar()->prepare("SELECT a.nombre,a.precio, a.foto, a.descripcion, b.talla, d.nombre, d.hexadecimal from pieza a JOIN piezatalla b on a.id = b.idPieza JOIN colorpieza c on a.id = c.idPieza JOIN color d on c.idColor = d.id WHERE a.id=:id;");
			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt -> execute();

			return $stmt -> fetchAll();

		$stmt = null;

	}
}