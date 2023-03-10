<?php

class ControladorComprasGastos
{

  /*=============================================
	CREAR COMPRA Y GASTO
	=============================================*/

  static public function ctrCrearCompraGasto()
  {

    if (isset($_POST["nuevoNombre"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"])) {

        $tabla = "compras_y_gastos";

        if (!$_POST["nuevoTipo"] || !$_POST["nuevaCuenta"]) {
          echo '<script>
            swal({
              type: "error",
              ' . (!$_POST["nuevoTipo"] ? 'title: "El tipo no puede ir vacío!",' : 'title: "La cuenta no puede ir vacía!",') . '
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                if (result.value) {
                  window.location = "compras-y-gastos";
                }
              })
          </script>';
        }

        echo '<script>
          console.log("nuevaCategoria: ' . $_POST["nuevaCategoria"] . '");
          console.log("nuevoProveedor: ' . $_POST["nuevoProveedor"] . '");
          console.log("nuevoTipo: ' . $_POST["nuevoTipo"] . '");
          console.log("nuevaCuenta: ' . $_POST["nuevaCuenta"] . '");
        </script>';

        $datos = array(
          "nombre" => $_POST["nuevoNombre"],
          "descripcion" => $_POST["nuevaDescripcion"],
          "tipo" => $_POST["nuevoTipo"],
          "monto" => $_POST["nuevoMonto"],
          "id_cuenta" => $_POST["nuevaCuenta"],
          "id_categoria" => $_POST["nuevaCategoria"],
          "id_proveedor" => $_POST["nuevoProveedor"],
        );

        $respuesta = ModeloComprasGastos::mdlIngresarCompraGasto($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>
            swal({
              type: "success",
              title: "La compra o gasto ha sido guardado correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                if (result.value) {
                  window.location = "compras-y-gastos";
                }
              })
          </script>';
        } else {

          echo '<script>
              swal({
                type: "error",
                title: "¡Error al guardar la compra o gasto!",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                  if (result.value) {
                    window.location = "compras-y-gastos";
                  }
                })
            </script>';
        }
      } else {

        echo '<script>
          swal({
              type: "error",
              title: "El nombre no puede ir vacío o llevar caracteres especiales!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
              if (result.value) {
                window.location = "compras-y-gastos";
              }
            })
          </script>';
      }
    }
  }

  /*=============================================
  MOSTRAR COMPRA Y GASTO
  =============================================*/

  static public function ctrMostrarComprasGastos($item, $valor)
  {

    $tabla = "compras_y_gastos";

    $respuesta = ModeloComprasGastos::mdlMostrarComprasGastos($tabla, $item, $valor);

    return $respuesta;
  }

  /*=============================================
  EDITAR COMPRA Y GASTO
  =============================================*/

  static public function ctrEditarCompraGasto()
  {

    if (isset($_POST["editarNombre"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])) {

        $tabla = "compras_y_gastos";

        $datos = array(
          "id" => $_POST["idCompraGasto"],
          "nombre" => $_POST["editarNombre"],
          "descripcion" => $_POST["editarDescripcion"],
          "tipo" => $_POST["editarTipo"],
          "monto" => $_POST["editarMonto"],
          "id_cuenta" => $_POST["editarCuenta"],
          "id_categoria" => $_POST["editarCategoria"],
          "id_proveedor" => $_POST["editarProveedor"],
        );

        $respuesta = ModeloComprasGastos::mdlEditarCompraGasto($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>
            swal({
              type: "success",
              title: "La compra o gasto ha sido editado correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                if (result.value) {
                  window.location = "compras-y-gastos";
                }
              })
          </script>';
        }
      } else {

        echo '<script>
          swal({
              type: "error",
              title: "El nombre no puede ir vacío o llevar caracteres especiales!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
              if (result.value) {
                window.location = "compras-y-gastos";
              }
            })
          </script>';
      }
    }
  }

  /*=============================================
  BORRAR COMPRA Y GASTO
  =============================================*/

  static public function ctrBorrarCompraGasto()
  {

    if (isset($_GET["idCompraGasto"])) {

      $tabla = "compras_y_gastos";
      $datos = $_GET["idCompraGasto"];

      $respuesta = ModeloComprasGastos::mdlBorrarCompraGasto($tabla, $datos);

      if ($respuesta == "ok") {

        echo '<script>
          swal({
            type: "success",
            title: "La compra o gasto ha sido borrado correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
              if (result.value) {
                window.location = "compras-y-gastos";
              }
            })
        </script>';
      }
    }
  }

  /*=============================================
  EXPORTAR EXCEL
  =============================================*/

  public function ctrExportarExcel()
  {


    $tabla = "compras_y_gastos";


    $item = null;
    $valor = null;

    $comprasGastos = ModeloComprasGastos::mdlMostrarComprasGastos($tabla, $item, $valor);

    /*=============================================
        Creamos el archivo de Excel
        =============================================*/

    $Name = 'compras_y_gastos.xls';

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
            <td style='font-weight:bold; border:1px solid #eee;'>ID</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>NOMBRE</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>DESCRIPCIÓN</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>TIPO</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>MONTO</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>CUENTA</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>CATEGORÍA</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>PROVEEDOR</td> 
            <td style='font-weight:bold; border:1px solid #eee;'>FECHA</td>
          </tr>");

    foreach ($comprasGastos as $row => $item) {

      $cuenta = ModeloComprasGastos::mdlMostrarComprasGastos('cuentas', 'id', $item["id_cuenta"]);
      $categoria = ModeloComprasGastos::mdlMostrarComprasGastos('categorias_finanzas', 'id', $item["id_categoria"]);
      $proveedor = ModeloComprasGastos::mdlMostrarComprasGastos('proveedores', 'id', $item["id_proveedor"]);

      echo utf8_decode("<tr>
              <td style='border:1px solid #eee;'>" . $item["id"] . "</td>
              <td style='border:1px solid #eee;'>" . $item["nombre"] . "</td>
              <td style='border:1px solid #eee;'>" . $item["descripcion"] . "</td>
              <td style='border:1px solid #eee;'>" . $item["tipo"]  . "</td>
              <td style='border:1px solid #eee;'>" . $item["monto"] . "</td>
              <td style='border:1px solid #eee;'>" . $cuenta["nombre"] . "</td>
              <td style='border:1px solid #eee;'>" . (!$categoria ? "Sin categoria" : $categoria["nombre"]) . "</td>
              <td style='border:1px solid #eee;'>" . (!$proveedor ? "Sin proveedor" : $proveedor["nombre"]) . "</td>
              <td style='border:1px solid #eee;'>" . $item["fecha"] . "</td>
            </tr>");
    }

    echo "</table>";
  }
}
