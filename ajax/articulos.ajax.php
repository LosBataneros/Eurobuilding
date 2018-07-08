<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelos.php";

class AjaxArticulos{

  public $idArticulo;

  public function ajaxEditarArticulo(){

    $item = "id_articulo";
    $valor = $this->idArticulo;

    $respuesta = ControladorArticulos::ctrMostrarArticulos($item, $valor);

    echo json_encode($respuesta);

  }

  }

if(isset($_POST["idArticulo"])){

  $editar = new AjaxArticulos();
  $editar -> idArticulo = $_POST["idArticulo"];
  $editar -> ajaxEditarArticulo();

}
