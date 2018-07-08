<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelos.php";

class TablaArticulos{

  public function mostrarTablaArticulos(){

    $item = null;
    $valor= null;

    $articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

    $datosJason = '{

          "data": [ ';

          for ($i=0; $i < count($articulos); $i++) {
            $opciones = "<button class='btn btn btn-warning waves-effect btnEditarArticulo' idArticulo='".$articulos[$i]["id_articulo"]."' data-toggle='modal' data-target='#editarArticulo'><i class='fas fa-edit'></i></button><button class='btn btn btn-danger waves-effect btnEliminarArticulos' idArticulo='".$articulos[$i]["id_articulo"]."'><i class='fas fa-trash'></i></button>";

      $datosJason .= '[
            "'.$articulos[$i]["id_articulo"].'",
            "'.$articulos[$i]["fecha"].'",
            "'.$articulos[$i]["titulo"].'",
            "'.$articulos[$i]["descripcion"].'",
            "'.$opciones.'"
          ],';

          }

        $datosJason = substr($datosJason, 0, -1);

      $datosJason .= ']

      }';

    echo $datosJason;

  }

}
$activar = new TablaArticulos();
$activar -> mostrarTablaArticulos();
