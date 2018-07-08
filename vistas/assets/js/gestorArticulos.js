    $('.tablaArticulos').DataTable({
        responsive: true,

        "ajax": "ajax/tablaArticulos.ajax.php",
        "defeRender": true,
        "retrieve": true,
        "proccesing": true,

        "language":{

          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ articulos",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando articulos del _START_ al _END_ de un total de _TOTAL_ articulos",
          "sInfoEmpty":      "Mostrando articulos del 0 al 0 de un total de 0 articulos",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ articulos)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },

          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }

        }
    });

    $(".tablaArticulos tbody").on("click", ".btnEditarArticulo", function(){

	    var idArticulo = $(this).attr("idArticulo");

    	var datos = new FormData();
    	datos.append("idArticulo", idArticulo);

    	$.ajax({

    		url:"ajax/articulos.ajax.php",
    		method: "POST",
    		data: datos,
    		cache: false,
    		contentType: false,
    		processData: false,
    		dataType: "json",
    		success: function(respuesta){

          console.log(respuesta);

    			 $("#editarArticulo .idArticulo").val(respuesta["id_articulo"]);

    			 $("#editarArticulo .editarTitulo").val(respuesta["titulo"]);
    			 $("#editarArticulo .editarDescripcion").val(respuesta["descripcion"]);

    		}

    	})

    })

$(".tablaArticulos tbody").on("click", ".btnEliminarArticulos", function(){

	var idArticulo = $(this).attr("idArticulo");

  	swal({
    	title: '¿Está seguro de borrar el Articulo?',
    	text: "¡Si no lo está puede cancelar la accíón!",
    	type: 'warning',
    	showCancelButton: true,
    	confirmButtonColor: '#3085d6',
      	cancelButtonColor: '#d33',
      	cancelButtonText: 'Cancelar',
      	confirmButtonText: 'Si, borrar categoría!'
	 },
   function(isConfirm) {
        if (isConfirm) {
          	window.location = "index.php?ruta=articulos&idArticulo="+idArticulo;
        }
      });

})
