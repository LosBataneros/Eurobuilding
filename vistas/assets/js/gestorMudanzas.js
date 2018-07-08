$('.tablaMudanzas').DataTable({
    responsive: true,

    "ajax": "ajax/tablaMudanzas.ajax.php",
    "defeRender": true,
    "retrieve": true,
    "proccesing": true,

    "language":{

      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ mudanzas",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando mudanzas del _START_ al _END_ de un total de _TOTAL_ mudanzas",
      "sInfoEmpty":      "Mostrando mudanzas del 0 al 0 de un total de 0 mudanzas",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ mudanzas)",
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

$(".tablaMudanzas tbody").on("click", ".btnEditarMudanza", function(){

  var idMudanza = $(this).attr("idMudanza");

  var datos = new FormData();
  datos.append("idMudanza", idMudanza);

  $.ajax({

    url:"ajax/mudanzas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){

      console.log(respuesta);

       $("#editarMudanza .idMudanza").val(respuesta["id_mudanza"]);
       $("#editarMudanza .antiguaFecha").val(respuesta["fecha"]);
       $("#editarMudanza .antiguaFecha").html(respuesta["fecha"]);
       $("#editarMudanza .antiguaOrigen").val(respuesta["origen"]);
       $("#editarMudanza .antiguoArticulo").val(respuesta["id_articulo"]);
       $("#editarMudanza .antiguoArticulo").html(respuesta["id_articulo"]);
       $("#editarMudanza .editarCantidad").val(respuesta["cantidad"]);
       $("#editarMudanza .editarMerma").val(respuesta["merma"]);
       $("#editarMudanza .editarCosto").val(respuesta["costo"]);

    }


  })


})

$(".tablaMudanzas tbody").on("click", ".btnEliminarMudanza", function(){

var idMudanza = $(this).attr("idMudanza");

swal({
  title: '¿Está seguro de borrar el Mudanza?',
  text: "¡Si no lo está puede cancelar la accíón!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, borrar la mudanza!'
},
function(isConfirm) {
    if (isConfirm) {
        window.location = "index.php?ruta=mudanzas&idMudanza="+idMudanza;
    }
  });

})
