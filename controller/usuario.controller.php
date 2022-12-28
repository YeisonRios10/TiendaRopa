<?php
class usuarioController{

    public static function login(){
        
        $resp = usuarioModel::obtenerUsuario($_POST['user'],$_POST['pass']);
        if(empty($resp)==1){
          // sweet alerta
            echo "<script>
         
         Swal.fire({
            title: 'warning',
            text: 'usuario o contraseña incorrecta',
            icon: 'warning',
            showCancelButton: false,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'ir a inicio¿,'
          }).then((result) => {
            if (result.isConfirmed) {
              let url =$('#url').val();
              window.location.href=''+url+'inicio';
            }
          })
         </script>";
        }else{
            if($resp['estado']==1){
                $_SESSION['sesion']=true;
                $_SESSION['usuario']=$resp['usuario'];
                echo "<script>
         
                Swal.fire({
                   title: 'felicitaciones',
                   text: 'se logueo correctamente',
                   icon: 'success',
                   showCancelButton: false,
                   allowOutsideClick: false,
                   confirmButtonColor: '#3085d6',
                   confirmButtonText: 'ir a productos'
                 }).then((result) => {
                   if (result.isConfirmed) {
                     let url =$('#url').val();
                     window.location.href=''+url+'productos';
                   }
                 })
                </script>";
            }else{
                echo '<script> 
                alert(" no se pudo logear, usuario suspendido");
            window.location.href="login";
                </script>';
            }
            print_r($resp);
        }
        
    }
    static public function crear_usuario(){
        $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
    
    $crea=[$usuario,$contrasena];
        $crear = usuarioModel::crearUsuario($crea);
        if ($crear =="oke") {
            
         echo "<script>
         
         Swal.fire({
            title: 'felicitaciones',
            text: 'El usuario se creo correctamente',
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