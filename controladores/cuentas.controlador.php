<?php

class ControladorCuentas
{

  /*=============================================
	CREAR CUENTA
	=============================================*/

  static public function ctrCrearCuenta()
  {

    if (isset($_POST["nuevaCuenta"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCuenta"])) {

        $tabla = "cuentas";

        $datos = array("nombre" => $_POST["nuevaCuenta"]);

        $respuesta = ModeloCuentas::mdlIngresarCuenta($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>

          swal({
              type: "success",
              title: "La cuenta ha sido guardada correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                  if (result.value) {

                  window.location = "cuentas";

                  }
                })

          </script>';
        }
      } else {

        echo '<script>

          swal({
              type: "error",
              title: "¡La cuenta no puede ir vacía o llevar caracteres especiales!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
              if (result.value) {

              window.location = "cuentas";

              }
            })

        	</script>';
      }
    }
  }

  /*=============================================
	MOSTRAR CUENTAS
	=============================================*/

  static public function ctrMostrarCuentas($item, $valor)
  {

    $tabla = "cuentas";

    $respuesta = ModeloCuentas::mdlMostrarCuentas($tabla, $item, $valor);

    return $respuesta;
  }

  /*=============================================
	EDITAR CUENTA
	=============================================*/

  static public function ctrEditarCuenta()
  {

    if (isset($_POST["editarCuenta"])) {

      if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCuenta"])) {

        $tabla = "cuentas";

        $datos = array(
          "nombre" => $_POST["editarCuenta"],
          "id" => $_POST["idCuenta"]
        );

        $respuesta = ModeloCuentas::mdlEditarCuenta($tabla, $datos);

        if ($respuesta == "ok") {

          echo '<script>

          swal({
              type: "success",
              title: "La cuenta ha sido cambiada correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                  if (result.value) {

                  window.location = "cuentas";

                  }
                })

          </script>';
        }
      } else {

        echo '<script>

          swal({
              type: "error",
              title: "¡La cuenta no puede ir vacía o llevar caracteres especiales!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
              if (result.value) {

              window.location = "cuentas";

              }
            })

        	</script>';
      }
    }
  }

  /*=============================================
  BORRAR CUENTA
  =============================================*/

  static public function ctrBorrarCuenta()
  {

    if (isset($_GET["idCuenta"])) {

      $tabla = "cuentas";
      $datos = $_GET["idCuenta"];

      $respuesta = ModeloCuentas::mdlBorrarCuenta($tabla, $datos);

      if ($respuesta == "ok") {

        echo '<script>

          swal({
              type: "success",
              title: "La cuenta ha sido borrada correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                  if (result.value) {

                  window.location = "cuentas";

                  }
                })

          </script>';
      }
    }
  }
}
