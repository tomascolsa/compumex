<?php

require_once "../controladores/almacen.controlador.php";
require_once "../modelos/almacen.modelo.php";

class AjaxAlmacen{

	/*=============================================
	EDITAR ALMACEN
	=============================================*/	

	public $idAlmacen;

	public function ajaxEditarAlmacen(){

		$item = "id";
		$valor = $this->idAlmacen;

		$respuesta = ControladorAlmacen::ctrMostrarAlmacen($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR ALMACEN
=============================================*/	
if(isset($_POST["idAlmacen"])){

	$almacen = new AjaxAlmacen();
	$almacen -> idAlmacen = $_POST["idAlmacen"];
	$almacen -> ajaxEditarAlmacen();
}
