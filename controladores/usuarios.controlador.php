<?php

class ControladorUsuarios{

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUser"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUser"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				$tabla = "usuario";
				$item = "nombre";
				$valor = $_POST["ingUser"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);

				if($respuesta["nombre"] == $_POST["ingUser"] && $respuesta["password"] == $_POST["ingPassword"]){

					$_SESSION["validarSesion"] = "ok";
					$_SESSION["nom_usuario"] = $respuesta["nombre"];

					echo '<script>

						window.location = "inicio";

					</script>';
				}else{

					echo '
						<div class="alert alert-danger col-xs-10 col-md-offset-1">
						<center>
						<span class="white-text">Error al ingresar, porfavor ingrese un los datos correctamente.</span>
						</center>
						</div>
					';

				}


			}

		}

	}

}
