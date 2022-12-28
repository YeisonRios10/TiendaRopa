<?php
// crea la conexion a la bd
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=".$_ENV["host"].";dbname=".$_ENV["db"]."",
                       "".$_ENV["user"]."",
                       "".$_ENV["pass"]."",
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                        );

        
        return $link;
    }

}