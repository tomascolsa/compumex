<?php

class ControladorClientes
{

	/*=============================================
	CREAR CLIENTES
	=============================================*/

	static public function ctrCrearCliente()
	{

		if (isset($_POST["nuevoCliente"])) {

			if (
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoDocumentoId"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) &&
				preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) &&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevaDireccion"])
			) {

				$tabla = "clientes";

				$datos = array(
					"nombre" => $_POST["nuevoCliente"],
					"documento" => $_POST["nuevoDocumentoId"],
					"email" => $_POST["nuevoEmail"],
					"telefono" => $_POST["nuevoTelefono"],
					"direccion" => $_POST["nuevaDireccion"],
					"fecha_nacimiento" => $_POST["nuevaFechaNacimiento"]
				);

				$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';
				}
			} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "clientes";

							}
						})

			  	</script>';
			}
		}
	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarClientes($item, $valor)
	{

		$tabla = "clientes";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function ctrEditarCliente()
	{

		if (isset($_POST["editarCliente"])) {

			if (
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCliente"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarDocumentoId"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) &&
				preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) &&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarDireccion"])
			) {

				$tabla = "clientes";

				$datos = array(
					"id" => $_POST["idCliente"],
					"nombre" => $_POST["editarCliente"],
					"documento" => $_POST["editarDocumentoId"],
					"email" => $_POST["editarEmail"],
					"telefono" => $_POST["editarTelefono"],
					"direccion" => $_POST["editarDireccion"],
					"fecha_nacimiento" => $_POST["editarFechaNacimiento"]
				);

				$respuesta = ModeloClientes::mdlEditarCliente($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';
				}
			} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "clientes";

							}
						})

			  	</script>';
			}
		}
	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarCliente()
	{

		if (isset($_GET["idCliente"])) {

			$tabla = "clientes";
			$datos = $_GET["idCliente"];

			$respuesta = ModeloClientes::mdlEliminarCliente($tabla, $datos);

			if ($respuesta == "ok") {

				echo '<script>

				swal({
					  type: "success",
					  title: "El cliente ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "clientes";

								}
							})

				</script>';
			}
		}
	}

	/*=============================================
	EXPORTAR EXCEL
	=============================================*/

	static public function ctrExportarExcel()
	{


		$item = null;
		$valor = null;

		$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

		/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

		$Name = 'clientes.xls';

		header('Expires: 0');
		header('Cache-control: private');
		header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
		header("Cache-Control: cache, must-revalidate");
		header('Content-Description: File Transfer');
		header('Last-Modified: ' . date('D, d M Y H:i:s'));
		header("Pragma: public");
		header('Content-Disposition:; filename="' . $Name . '"');
		header("Content-Transfer-Encoding: binary");

		echo utf8_decode("<table border='0'> 

				<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>Documento ID</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Nombre</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Email</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Teléfono</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Dirección</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Fecha Nacimiento</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Última compra</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>Ingreso al sistema</td> 
				</tr>");

		foreach ($clientes as $row => $item) {

			echo utf8_decode("<tr>
					<td style='border:1px solid #eee;'>" . $item["documento"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["nombre"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["email"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["telefono"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["direccion"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["fecha_nacimiento"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["ultima_compra"] . "</td>
					<td style='border:1px solid #eee;'>" . $item["fecha"] . "</td>
				</tr>");
		}

		echo "</table>";
	}
}
