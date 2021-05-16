<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class controladorInicio{

	static public function ctrMostrarPiezas(){

		$tabla = "pieza";

		$respuesta = modeloInicio::mdlMostrarPiezas($tabla);

		echo json_encode($respuesta);
	}

	static public function ctrIngresoUsuario($user, $pass){
		if(isset($user)){

			if(preg_match('/^[a-zA-Z0-9]+$/', $user) &&
			preg_match('/^[a-zA-Z0-9]+$/', $pass)){

			$encriptar = crypt($pass, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "clientes";

				$item = "usuario";
				$valor = $user;

				$respuesta = modeloInicio::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $user && $respuesta["password"] == $encriptar){

						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["foto"] = $respuesta["foto"];

						var_dump($_SESSION["iniciarSesion"]);
							echo '<script>

								window.location = "/E-commerce/";

							</script>';

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}

		}

	}
}

