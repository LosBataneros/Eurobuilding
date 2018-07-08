<?php

class ControladorArticulos{

  static public function ctrMostrarArticulos($item, $valor){

    $tabla = "articulos";

    $respuesta = ModeloArticulos::mdlMostrarArticulos($tabla, $item, $valor);

    return $respuesta;

  }

  static public function ctrMostrarArticulosTotal(){

    $tabla = "articulos";
    $item = "id_articulo";

    $respuesta = ModeloArticulos::mdlMostrarArticulosTotal($tabla, $item);

    return $respuesta;

  }

  static public function ctrCrearArticulo(){

    if(isset($_POST["crearArticulo"])){

      if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tituloArticulo"]) ){


        $datos = array("titulo"=>$_POST["tituloArticulo"],
                    "descripcion"=>$_POST["descripcionArticulo"]);

        $respuesta = ModeloArticulos::mdlIngresarArticulo("articulos", $datos);

        if($respuesta == "ok"){

          echo'<script>

          swal({
            title: "___",
            text: "El Articulo se creo correctamente",
            type: "success",
            showCancelButton: false,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Aceptar",
          },function(isConfirm){
            if (isConfirm){
              	window.location = "articulos";
            }
          });

          </script>';

        }

      }else{

        echo'<script>

          swal({
              type: "error",
              title: "¡El articulo no puede ir vacía o llevar caracteres especiales!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              })

          </script>';

          return;

      }

    }

  }

  static public function ctrEditarArticulo(){

    if(isset($_POST["editarArticulo"])){

      if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTituloArticulo"]) ){

        $datos = array("id"=>$_POST["idArticulo"],
                 "titulo"=>$_POST["editarTituloArticulo"],
                 "descripcion"=>$_POST["editarDescripcionArticulo"]);


        $respuesta = ModeloArticulos::mdlEditarArticulos("articulos", $datos);

        if($respuesta == "ok"){

          echo'<script>

          swal({
            title: "___",
            text: "El articulo se actualizo correctamente",
            type: "success",
            showCancelButton: false,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Aceptar",
          },function(isConfirm){
            if (isConfirm){
              	window.location = "articulos";
            }
          });

          </script>';

        }

      }else{

        echo'<script>

          swal({
              type: "error",
              title: "¡El articulo no se actualizo correctamente!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              })

          </script>';

          return;

      }

    }

  }

  static public function ctrEliminarArticulo(){

    if(isset($_GET["idArticulo"])){

      $respuesta = ModeloArticulos::mdlEliminarArticulos("articulos", "id_articulo", $_GET["idArticulo"]);

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
              window.location = "articulos";
          }
        });

        </script>';

      }


    }

  }

}
