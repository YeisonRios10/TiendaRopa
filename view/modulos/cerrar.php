<?php 
session_destroy();
// alerta sweet2
echo "<script>
         
Swal.fire({
    position: 'top-center',
    icon: 'success',
    title: 'Has cerrado Sesión',
    showConfirmButton: false,
    timer: 1500
    
  })
</script>";