<?php
require_once "conexion.php";

class usuarioModel{
    static public function obtenerUsuario($user, $pass){
      
        $stmt = conexion::conectar()->prepare("SELECT * from usuario where usuario='$user' and contrasena='$pass'");
        $stmt -> execute();
        return $stmt -> fetch();
        
        $stmt ->close ();
    $stmt =null;
    }
    static public function crearUsuario($crea){
        $stmt = conexion::conectar()->prepare("INSERT INTO usuario (usuario,contrasena,estado) values('$crea[0]','$crea[1]','1')");
        $stmt -> execute();
        return "oke";
        $stmt ->close ();
    $stmt =null; 
    
    }
}
