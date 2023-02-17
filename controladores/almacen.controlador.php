<?php

class ControladorAlmacen{

	/*=============================================
	CREAR ALMACEN
	=============================================*/

	static public function ctrCrearAlmacen(){

		if(isset($_POST["nuevaAlmacen"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaAlmacen"])){

				$tabla = "almacen";

				$datos = $_POST["nuevaAlmacen"];

				$respuesta = ModeloAlmacen::mdlIngresarAlmacen($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Almacen ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "almacen";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Almacen no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "almacen";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR Almacen
	=============================================*/

	static public function ctrMostrarAlmacen($item, $valor){

		$tabla = "almacen";

		$respuesta = ModeloAlmacen::mdlMostrarAlmacen($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	EDITAR Almacen
	=============================================*/

	static public function ctrEditarAlmacen(){

		if(isset($_POST["editarAlmacen"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarAlmacen"])){

				$tabla = "almacen";

				$datos = array("almacen"=>$_POST["editarAlmacen"],
							   "id"=>$_POST["idAlmacen"]);

				$respuesta = ModeloAlmacen::mdlEditarAlmacen($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Almacen ha sido cambiada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "almacen";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Almacen no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "almacen";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR Almacen
	=============================================*/

	static public function ctrBorrarAlmacen(){

		if(isset($_GET["idAlmacen"])){

			$tabla ="Almacen";
			$datos = $_GET["idAlmacen"];

			$respuesta = ModeloAlmacen::mdlBorrarAlmacen($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El Almacen ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "almacen";

									}
								})

					</script>';
			}
		}
		
	}
}
