<?php 
if (isset($_POST['usuario'])) {

usuarioController::crear_usuario();
}else{
 
?>

<div class="container mt-5 pt-5">
    <div class="card w-50  text-white mt-3 border border-warning mx-auto  d-block p-5 "style="background-color: indigo;">
        <div class="display-4 text-warning text-center">Crea tu usuario</div>
        <br>
        <form method="POST">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Usuario</label>
                    <input type="texto" class="form-control" placeholder="Escribe tu nuevo usuario" name="usuario" id="inputEmail4">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Digita una ucontraseña" name="contrasena" id="inputPassword4">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning "style="color: indigo;">registrarse</button>

                </div>
            </div>

        </form>
    </div>


</div>

<?php }

?>
<br><br>