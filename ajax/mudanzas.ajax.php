<?php

require_once "../controladores/mudanzas.controlador.php";
require_once "../modelos/mudanzas.modelos.php";

class AjaxMudanzas{

  public $idMudanza;

  public function ajaxEditarMudanza(){

    $item = "id_mudanza";
    $valor = $this->idMudanza;

    $respuesta = ControladorMudanzas::ctrMostrarMudanzas($item, $valor);
    echo json_encode($respuesta);

  }

  }

if(isset($_POST["idMudanza"])){

  $editar = new AjaxMudanzas();
  $editar -> idMudanza = $_POST["idMudanza"];
  $editar -> ajaxEditarMudanza();

}
