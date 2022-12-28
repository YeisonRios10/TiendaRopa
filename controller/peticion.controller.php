<?php
class peticionController{

    static public function crear_peticion(){
        $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $telefono=$_POST['direccion'];
    $descripcion=$_POST['descripcion'];
    
    $crea=[$nombre,$email,$telefono,$direccion,$descripcion];
        $crear = peticionModel::crearPeticion($crea);
        if ($crear =="okis") {
            
         echo "<script>
         
         Swal.fire({
            title: 'felicitaciones',
            text: 'su información fue enviada correctamente',
            icon: 'success',
            showCancelButton: false,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'ir a inicio'
          }).then((result) => {
            if (result.isConfirmed) {
              let url =$('#url').val();
              window.location.href=''+url+'inicio';
            }
          })
         </script>";
    
    
    }
    
    }

}