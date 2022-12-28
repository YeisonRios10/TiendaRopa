<?php
require_once "conexion.php";

class peticionModel{
    static public function crearPeticion($crea){
        $stmt = conexion::conectar()->prepare("INSERT INTO peticion (nombre, email, telefono,direccion, descripcion) values('$crea[0]','$crea[1]','$crea[2]','$crea[3]','$crea[4]')");
        $stmt -> execute();
        return "okis";
        $stmt ->close ();
    $stmt =null; 
    
    }
}