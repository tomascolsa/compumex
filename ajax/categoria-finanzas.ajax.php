<?php

require_once "../controladores/categorias-finanzas.controlador.php";
require_once "../modelos/categorias-finanzas.modelo.php";

class AjaxCategoriaFinanzas
{

  /*=============================================
  EDITAR CategoriaFinanzas
  =============================================*/

  public $idCategoriaFinanzas;

  public function ajaxEditarCategoriaFinanzas()
  {

    $item = "id";
    $valor = $this->idCategoriaFinanzas;

    $respuesta = ControladorCategoriaFinanzas::ctrMostrarCategoriaFinanzas($item, $valor);

    echo json_encode($respuesta);
  }
}

/*=============================================
EDITAR PROVEEDOR
=============================================*/
if (isset($_POST["idCategoriaFinanzas"])) {

  $CategoriaFinanzas = new AjaxCategoriaFinanzas();
  $CategoriaFinanzas->idCategoriaFinanzas = $_POST["idCategoriaFinanzas"];
  $CategoriaFinanzas->ajaxEditarCategoriaFinanzas();
}
