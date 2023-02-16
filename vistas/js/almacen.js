/*=============================================
EDITAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEditarAlmacen", function(){

	var idAlmacen = $(this).attr("idAlmacen");

	var datos = new FormData();
	datos.append("idAlmacen", idAlmacen);

	$.ajax({
		url: "ajax/almacen.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

     		$("#editarAlmacen").val(respuesta["almacen"]);
     		$("#idAlmacen").val(respuesta["id"]);

     	}

	})


})

/*=============================================
ELIMINAR CATEGORIA
=============================================*/
$(".tablas").on("click", ".btnEliminarAlmacen", function(){

	 var idAlmacen = $(this).attr("idAlmacen");

	 swal({
	 	title: '¿Está seguro de borrar este Almacen?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar Almacen!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=almacens&idAlmacen="+idAlmacen;

	 	}

	 })

})