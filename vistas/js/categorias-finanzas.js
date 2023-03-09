/*=============================================
EDITAR CATEGORIA FINANZAS
=============================================*/

$(".tablas").on("click", ".btnEditarCategoriaFinanzas", function () {
  var idCategoriaFinanzas = $(this).attr("idCategoriaFinanzas");

  var datos = new FormData();
  datos.append("idCategoriaFinanzas", idCategoriaFinanzas);

  $.ajax({
    url: "ajax/categorias-finanzas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      $("#editarCategoriaFinanzas").val(respuesta["nombre"]);
      $("#idCategoriaFinanzas").val(respuesta["id"]);
    },
  });
});

/*=============================================
ELIMINAR CATEGORIA FINANZAS
=============================================*/

$(".tablas").on("click", ".btnEliminarCategoriaFinanzas", function () {
  var idCategoriaFinanzas = $(this).attr("idCategoriaFinanzas");
  swal({
    title: "¿Está seguro de borrar esta Categoria?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, borrar Categoria!",
  }).then(function (result) {
    if (result.value) {
      window.location =
        "index.php?ruta=categorias-finanzas&idCategoriaFinanzas=" +
        idCategoriaFinanzas;
    }
  });
});
