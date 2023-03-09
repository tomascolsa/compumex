/*=============================================
EDITAR CUENTA
=============================================*/

$(".tablas").on("click", ".btnEditarCuenta", function () {
  console.log("HERE");
  var idCuenta = $(this).attr("idCuenta");

  var datos = new FormData();
  datos.append("idCuenta", idCuenta);

  $.ajax({
    url: "ajax/cuentas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      $("#editarCuenta").val(respuesta["nombre"]);
      $("#idCuenta").val(respuesta["id"]);
    },
  });
});

/*=============================================
ELIMINAR CUENTA
=============================================*/
$(".tablas").on("click", ".btnEliminarCuenta", function () {
  var idCuenta = $(this).attr("idCuenta");
  swal({
    title: "¿Está seguro de borrar esta Cuenta?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, borrar Cuenta!",
  }).then(function (result) {
    if (result.value) {
      window.location = "index.php?ruta=cuentas&idCuenta=" + idCuenta;
    }
  });
});
