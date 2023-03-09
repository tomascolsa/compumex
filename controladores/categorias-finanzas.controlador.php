<?php

class ControladorCategoriaFinanzas
{

  /*=============================================
	CREAR CATEGORIA FINANZAS
	=============================================*/

  static public function ctrCrearCategoriaFinanzas()
  {

    if (isset($_POST["nuevaCategoriaFinanzas"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoriaFinanzas"])) {

        $tabla = "categorias_finanzas";

        $datos = array("nombre" => $_POST["nuevaCategoriaFinanzas"]);

        $respuesta = ModeloCategoriaFinanzas::mdlIngresarCategoriaFinanzas($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>
            swal({

            type: "success",
            title: "La categoria ha sido guardada correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if (result.value) {

                window.location = "categorias-finanzas";

                }
              })

        </script>';
        }
      } else {

        echo '<script>
        swal({
            type: "error",
            title: "¡La categoria no puede ir vacía o llevar caracteres especiales!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
            if (result.value) {

            window.location = "categorias-finanzas";

            }
          })

        </script>';
      }
    }
  }

  /*=============================================
	MOSTRAR CATEGORIA FINANZAS
	=============================================*/

  static public function ctrMostrarCategoriaFinanzas($item, $valor)
  {

    $tabla = "categorias_finanzas";

    $respuesta = ModeloCategoriaFinanzas::mdlMostrarCategoriaFinanzas($tabla, $item, $valor);

    return $respuesta;
  }

  /*=============================================
	EDITAR CATEGORIA FINANZAS
	=============================================*/

  static public function ctrEditarCategoriaFinanzas()
  {
    if (isset($_POST["editarCategoriaFinanzas"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoriaFinanzas"])) {

        $tabla = "categorias_finanzas";

        $datos = array(
          "nombre" => $_POST["editarCategoriaFinanzas"],
          "id" => $_POST["idCategoriaFinanzas"]
        );

        $respuesta = ModeloCategoriaFinanzas::mdlEditarCategoriaFinanzas($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>
            swal({

            type: "success",
            title: "La categoria ha sido cambiada correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if (result.value) {

                window.location = "categorias-finanzas";

                }
              })

        </script>';
        }
      } else {

        echo '<script>
        swal({
            type: "error",
            title: "¡La categoria no puede ir vacía o llevar caracteres especiales!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
            if (result.value) {

            window.location = "categorias-finanzas";

            }
          })

        </script>';
      }
    }
  }

  /*=============================================
  BORRAR CATEGORIA FINANZAS
  =============================================*/

  static public function ctrBorrarCategoriaFinanzas()
  {

    if (isset($_GET["idCategoriaFinanzas"])) {

      $tabla = "categorias_finanzas";
      $datos = $_GET["idCategoriaFinanzas"];

      $respuesta = ModeloCategoriaFinanzas::mdlBorrarCategoriaFinanzas($tabla, $datos);

      if ($respuesta == "ok") {

        echo '<script>
  
          swal({
                type: "success",
                title: "La categoria ha sido borrada correctamente",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                  if (result.value) {
  
                  window.location = "categorias-finanzas";
  
                  }
                })
  
          </script>';
      }
    }
  }
}
