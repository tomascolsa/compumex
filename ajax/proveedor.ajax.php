<?php

require_once "../controladores/proveedores.controlador.php";
require_once "../modelos/proveedores.modelo.php";

class AjaxProveedores
{

  /*=============================================
  EDITAR PROVEEDORES
  =============================================*/

  public $idProveedor;

  public function ajaxEditarProveedores()
  {

    $item = "id";
    $valor = $this->idProveedor;

    $respuesta = ControladorProveedores::ctrMostrarProveedores($item, $valor);

    echo json_encode($respuesta);
  }
}

/*=============================================
EDITAR PROVEEDOR
=============================================*/
if (isset($_POST["idProveedor"])) {

  $proveedores = new AjaxProveedores();
  $proveedores->idProveedor = $_POST["idProveedor"];
  $proveedores->ajaxEditarProveedores();
}
