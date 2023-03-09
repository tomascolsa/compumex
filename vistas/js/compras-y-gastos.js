/*=============================================
EDITAR COMPRA GASTO
=============================================*/

$(".tablas").on("click", ".btnEditarCompraGasto", function () {
  var idCompraGasto = $(this).attr("idCompraGasto");

  var datos = new FormData();
  datos.append("idCompraGasto", idCompraGasto);

  $.ajax({
    url: "ajax/compras-y-gastos.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      $("#editarNombre").val(respuesta["nombre"]);
      $("#editarDescripcion").val(respuesta["descripcion"]);
      $("#editarTipo").val(respuesta["tipo"]);
      $("#editarMonto").val(respuesta["monto"]);
      $("#editarCuenta").val(respuesta["id_cuenta"]);
      $("#editarCategoria").val(respuesta["id_categoria"]);
      $("#editarProveedor").val(respuesta["id_proveedor"]);
      $("#idCompraGasto").val(respuesta["id"]);
    },
  });
});

/*=============================================
ELIMINAR COMPRA GASTO
=============================================*/

$(".tablas").on("click", ".btnEliminarCompraGasto", function () {
  var idCompraGasto = $(this).attr("idCompraGasto");
  swal({
    title: "¿Está seguro de borrar esta compdddddddddddra y gasto?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, borrar compra y gasto!",
  }).then(function (result) {
    if (result.value) {
      window.location =
        "index.php?ruta=compras-y-gastos&idCompraGasto=" + idCompraGasto;
    }
  });
});
