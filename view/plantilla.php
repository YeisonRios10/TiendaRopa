<?php
session_start();

$rutas = array();
$ruta = "";
if(isset($_GET["ruta"])){
    $rutas = explode("/", $_GET["ruta"]);
    $ruta =$rutas[0];
}else{
    $ruta = "inicio";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet"
        href="<?php echo $_ENV["url"];?>view/assets/src/themify-icons/assets/themify-icons/themify-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo $_ENV['url'] .'view';?>/assets/js/scripts.js"></script>
    <link rel="stylesheet" href="<?php echo $_ENV["url"];?>view\assets\style.css">
</head>
<body>

<?php 

include "modulos/navbar.php";
?>
  

   <?php
    if($ruta=="inicio"){
        include "modulos/inicio.php";
    }else{
        if( $ruta=="productos" || $ruta=="login" || $ruta=="asesor" || $ruta=="comprar"||$ruta=="servicio" ||$ruta=="registro"  || $ruta=="cerrar" || $ruta=="inicio"){
            include "modulos/".$ruta.".php";
    }else{
        echo "error 404";
    }
}
   
   ?>

<?php
include "modulos/footer.php";
?>
 <br>
<input type="hidden" name="url" id="url" value="<?php echo $_ENV['url'];?>">



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="<?php echo $_ENV["url"];?>view\assets\js\waypoint.js"></script>

</body>
</html>