<?php

class ControladorProveedores
{

  /*=============================================
	CREAR PROVEEDORES
	=============================================*/

  static public function ctrCrearProveedores()
  {

    if (isset($_POST["nuevaProveedor"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaProveedor"])) {

        $tabla = "proveedores";

        $datos = array("nombre" => $_POST["nuevaProveedor"]);

        $respuesta = ModeloProveedores::mdlIngresarProveedores($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>
            swal({

            type: "success",
            title: "El proveedor ha sido guardado correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if (result.value) {

                window.location = "proveedores";

                }
              })

        </script>';
        }
      } else {

        echo '<script>
        swal({
            type: "error",
            title: "El proveedor no puede ir vacío o llevar caracteres especiales!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
            if (result.value) {

            window.location = "proveedores";

            }
          })

        </script>';
      }
    }
  }

  /*=============================================
	MOSTRAR PROVEEDORES
	=============================================*/

  static public function ctrMostrarProveedores($item, $valor)
  {

    $tabla = "proveedores";

    $respuesta = ModeloProveedores::mdlMostrarProveedores($tabla, $item, $valor);

    return $respuesta;
  }

  /*=============================================
	EDITAR PROVEEDORES
	=============================================*/

  static public function ctrEditarProveedores()
  {
    if (isset($_POST["editarProveedor"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarProveedor"])) {

        $tabla = "proveedores";

        $datos = array(
          "nombre" => $_POST["editarProveedor"],
          "id" => $_POST["idProveedor"]
        );

        $respuesta = ModeloProveedores::mdlEditarProveedores($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>
            swal({

            type: "success",
            title: "El proveedor ha sido cambiado correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if (result.value) {

                window.location = "proveedores";

                }
              })

        </script>';
        }
      } else {

        echo '<script>
        swal({
            type: "error",
            title: "El proveedor no puede ir vacío o llevar caracteres especiales!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
            if (result.value) {

            window.location = "proveedores";

            }
          })

        </script>';
      }
    }
  }

  /*=============================================
  BORRAR PROVEEDORES
  =============================================*/

  static public function ctrBorrarProveedores()
  {

    if (isset($_GET["idProveedor"])) {

      $tabla = "proveedores";
      $datos = $_GET["idProveedor"];

      $respuesta = ModeloProveedores::mdlBorrarProveedores($tabla, $datos);

      if ($respuesta == "ok") {

        echo '<script>
  
          swal({
                type: "success",
                title: "El proveedor ha sido borrado correctamente",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                  if (result.value) {
  
                  window.location = "proveedores";
  
                  }
                })
  
          </script>';
      }
    }
  }
}
