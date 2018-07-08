<?php

class ControladorDepartamentos{

  static public function ctrMostrarDepartamentos($item, $valor){

    $tabla = "departamentos";

    $respuesta = ModeloDepartamentos::mdlMostrarDepartamentos($tabla, $item, $valor);

    return $respuesta;

  }

}
