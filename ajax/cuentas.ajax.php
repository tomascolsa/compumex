<?php

require_once "../controladores/cuentas.controlador.php";
require_once "../modelos/cuentas.modelo.php";

class AjaxCuentas
{

  /*=============================================
  EDITAR CUENTA
  =============================================*/

  public $idCuenta;

  public function ajaxEditarCuenta()
  {

    $item = "id";
    $valor = $this->idCuenta;

    $respuesta = ControladorCuentas::ctrMostrarCuentas($item, $valor);

    echo json_encode($respuesta);
  }
}

/*=============================================
EDITAR CUENTA
=============================================*/
if (isset($_POST["idCuenta"])) {

  $cuenta = new AjaxCuentas();
  $cuenta->idCuenta = $_POST["idCuenta"];
  $cuenta->ajaxEditarCuenta();
}
