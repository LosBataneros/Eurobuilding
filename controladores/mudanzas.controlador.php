<?php

class ControladorMudanzas{

  static public function ctrMostrarMudanzas($item, $valor){

    $tabla = "mudanzas";

    $respuesta = ModeloMudanzas::mdlMostrarMudanzas($tabla, $item, $valor);

    return $respuesta;

  }

  static public function ctrMostrarMudanzasOrigen($item, $valor){

    $tabla = "mudanzas";

    $respuesta = ModeloMudanzas::mdlMostrarMudanzasOrigen($tabla, $item, $valor);

    return $respuesta;

  }

  static public function ctrMostrarMudanzasDestino($item, $valor){

    $tabla = "mudanzas";

    $respuesta = ModeloMudanzas::mdlMostrarMudanzasDestino($tabla, $item, $valor);

    return $respuesta;

  }

  static public function ctrMostrarMudanzasTotal(){

    $tabla = "mudanzas";
    $item = "id_mudanza";

    $respuesta = ModeloMudanzas::mdlMostrarMudanzasTotal($tabla, $item);

    return $respuesta;

  }

  static public function ctrCrearMudanza(){

    if(isset($_POST["crearMudanza"])){

        $datos = array("fecha"=>$_POST["fechaMudanza"],
                    "origen"=>$_POST["origenMudanza"],
                    "destino"=>$_POST["destinoMudanza"],
                    "articulo"=>$_POST["articuloMudanza"],
                    "cantidad"=>$_POST["cantidadMudanza"],
                    "merma"=>$_POST["mermaMudanza"],
                    "costo"=>$_POST["costoMudanza"]);

        $respuesta = ModeloMudanzas::mdlIngresarMudanza("mudanzas", $datos);

        if($respuesta == "ok"){

          echo'<script>

          swal({
            title: "___",
            text: "El Mudanza se creo correctamente",
            type: "success",
            showCancelButton: false,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Aceptar",
          },function(isConfirm){
            if (isConfirm){
              	window.location = "mudanzas";
            }
          });

          </script>';

        }

    }

  }

  static public function ctrEditarMudanza(){

    if(isset($_POST["editarMudanza"])){

        $datos = array("id"=>$_POST["idMudanza"],
                    "fecha"=>$_POST["editarFechaMudanza"],
                    "origen"=>$_POST["editarOrigenMudanza"],
                    "destino"=>$_POST["editarDestinoMudanza"],
                    "articulo"=>$_POST["editarArticuloMudanza"],
                    "cantidad"=>$_POST["editarCantidadMudanza"],
                    "merma"=>$_POST["editarMermaMudanza"],
                    "costo"=>$_POST["editarCostoMudanza"]);

        $respuesta = ModeloMudanzas::mdlEditarMudanza("mudanzas", $datos);

        if($respuesta == "ok"){

          echo'<script>

          swal({
            title: "___",
            text: "El Mudanza se actualizo correctamente",
            type: "success",
            showCancelButton: false,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Aceptar",
          },function(isConfirm){
            if (isConfirm){
              	window.location = "mudanzas";
            }
          });

          </script>';

        }else {
          echo'<script>

          swal({
            title: "___",
            text: "Ocurrio un error al actualizar la mudanza",
            type: "error",
            showCancelButton: false,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Aceptar",
          },function(isConfirm){
            if (isConfirm){
                window.location = "mudanzas";
            }
          });

          </script>';
        }

    }

  }

  static public function ctrEliminarMudanza(){

    if(isset($_GET["idMudanza"])){

      $respuesta = ModeloMudanzas::mdlEliminarMudanzas("mudanzas", "id_mudanza", $_GET["idMudanza"]);

      if($respuesta == "ok"){

        echo'<script>

        swal({
          title: "___",
          text: "El articulo ha sido borrado correctamente",
          type: "success",
          confirmButtonClass: "btn-success",
          confirmButtonText: "Aceptar",
        },
        function(isConfirm){
          if (isConfirm){
              window.location = "mudanzas";
          }
        });

        </script>';

      }


    }

  }

}
