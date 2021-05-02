<?php
require_once "../modelos/registro.modelo.php";
class ControladorRegistro{
    
    static public function ctrCrearCliente(){
		if(isset($_POST["txtNombre"])){
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["txtNombre"]) &&
			   preg_match('/^[a-zA-Z0-9_-]+$/', $_POST["txtUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["txtContrasena"]) &&
			   preg_match('/^[a-zA-Z0-9@._-]+$/', $_POST["txtCorreo"])){

				$tabla = "clientes";

				$encriptar = crypt($_POST["txtContrasena"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$datos = array("nombre" => $_POST["txtNombre"],
					           "usuario" => $_POST["txtUsuario"],
					           "password" => $encriptar,
							   "correo" => $_POST["txtCorreo"]);
				
				$respuesta = modeloRegistro::mdlRegistrarCliente($tabla, $datos);

				if($respuesta == "ok"){

					echo '<script>

					Swal.fire({

						icon: "success",
						title: "¡Se Ha Registrado Correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "/E-commerce/";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

				Swal.fire({

						icon: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "clientes";

						}

					});
				

				</script>';

			}


		}


	}
}