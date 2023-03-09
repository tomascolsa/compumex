<?php

require_once "../controladores/compras-y-gastos.controlador.php";
require_once "../modelos/compras-y-gastos.modelo.php";

class AjaxCompraGasto
{

  /*=============================================
  EDITAR COMPRA Y GASTO
  =============================================*/

  public $idCompraGasto;

  public function ajaxEditarCompraGasto()
  {

    $item = "id";
    $valor = $this->idCompraGasto;

    $respuesta = ControladorComprasGastos::ctrMostrarComprasGastos($item, $valor);

    echo json_encode($respuesta);
  }
}

/*=============================================
EDITAR COMPRA Y GASTO
=============================================*/

if (isset($_POST["idCompraGasto"])) {

  $compraGasto = new AjaxCompraGasto();
  $compraGasto->idCompraGasto = $_POST["idCompraGasto"];
  $compraGasto->ajaxEditarCompraGasto();
}
