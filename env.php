<?php

$_enviroment ="dev";
//$enviroment ="prod";

if($_enviroment == "dev"){
    // base de datos
    $_ENV["host"] = 'localhost';
    $_ENV["db"] = 'mvc';
    $_ENV["user"] = 'root';
    $_ENV["pass"] = '';

    //ruta del servidor
    $_ENV["url"] = 'http://localhost:8080/mvc/';
}else{
    $_ENV["host"] = 'localhost';
    $_ENV["db"] = 'mvc';
    $_ENV["user"] = 'root';
    $_ENV["pass"] = '';

    //ruta del servidor
    $_ENV["url"] = 'http://localhost:8080/mvc/';
}