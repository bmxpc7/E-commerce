<?php

require_once "conexion.php";

class modeloPieza{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarPieza($id){

			$stmt = Conexion::conectar()->prepare("SELECT a.nombre,a.precio, a.foto, a.descripcion, b.talla, d.nombre as color, d.hexadecimal from pieza a JOIN piezaTalla b on a.id = b.idPieza JOIN colorPieza c on a.id = c.idPieza JOIN color d on c.idColor = d.id WHERE a.id=:id;");
			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt -> execute();

			return $stmt -> fetchAll();

		$stmt = null;

	}
}