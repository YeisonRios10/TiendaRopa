<?php 
require_once "env.php";
require_once "controller/plantilla.controller.php";
require_once "controller/peticion.controller.php";
require_once "controller/usuario.controller.php";



require_once "model/peticion.model.php";
require_once "model/usuario.model.php";


$plantilla = new controllerPlantilla();
$plantilla ->plantilla();

?>