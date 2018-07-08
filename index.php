<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/core.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/mudanzas.controlador.php";
require_once "controladores/articulos.controlador.php";
require_once "controladores/departamentos.controlador.php";

require_once "modelos/rutas.php";
require_once "modelos/usuarios.modelos.php";
require_once "modelos/mudanzas.modelos.php";
require_once "modelos/articulos.modelos.php";
require_once "modelos/departamentos.modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
