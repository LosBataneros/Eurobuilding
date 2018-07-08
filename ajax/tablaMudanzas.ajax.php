<?php

require_once "../controladores/mudanzas.controlador.php";
require_once "../modelos/mudanzas.modelos.php";

class TablaMudanzas{

  public function mostrarTablaMudanzas(){

    $item = null;
    $valor= null;

    $mudanzas = ControladorMudanzas::ctrMostrarMudanzas($item, $valor);
    $origen = ControladorMudanzas::ctrMostrarMudanzasOrigen($item, $valor);
    $destino = ControladorMudanzas::ctrMostrarMudanzasDestino($item, $valor);

    $datosJason = '{

          "data": [ ';

          for ($i=0; $i < count($mudanzas); $i++) {
            $opciones = "<button class='btn btn btn-warning waves-effect btnEditarMudanza' idMudanza='".$mudanzas[$i]["id_mudanza"]."' data-toggle='modal' data-target='#editarMudanza'><i class='fas fa-edit'></i></button><button class='btn btn btn-danger waves-effect btnEliminarMudanza' idMudanza='".$mudanzas[$i]["id_mudanza"]."'><i class='fas fa-trash'></i></button>";

      $datosJason .= '[
            "'.$mudanzas[$i]["id_mudanza"].'",
            "'.$mudanzas[$i]["fecha"].'",
            "'.$origen[$i]["titulo_dep"].'",
            "'.$destino[$i]["titulo_dep"].'",
            "'.$mudanzas[$i]["titulo"].'",
            "'.$mudanzas[$i]["cantidad"].'",
            "'.$mudanzas[$i]["merma"].'",
            "'.$mudanzas[$i]["costo"].'",
            "'.$opciones.'"
          ],';

          }

        $datosJason = substr($datosJason, 0, -1);

      $datosJason .= ']

      }';

    echo $datosJason;

  }

}
$activar = new TablaMudanzas();
$activar -> mostrarTablaMudanzas();
