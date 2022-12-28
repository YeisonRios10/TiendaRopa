<?php
if(isset($_POST['user'])){
    usuarioController::login();
}else{


?>


<div class="container mt-5 pt-5"  class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1 " >
    <div class="card w-50 text-white mt-3 border mx-auto  d-block p-5 "style="background-color: indigo;" >
        <div class="display-4 text-warning text-center"><strong>login</strong></div>
        <br>
        <form method="POST">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Usuario</label>
                    <input type="texto" class="form-control" placeholder="Escribe tu usuario"name="user" id="inputEmail4">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Digita tu contraseña" name="pass" id="inputPassword4">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6 d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning "style="color: purple;">inicia sesión</button>

                </div>
                <div class="col-6">
                    <a href="<?php echo $_ENV["url"];?>registro" class="btn btn-outline-warning "style="background-color: indigo;" >registrate</a>
                </div>
            </div>

        </form>
    </div>


</div>
<br>
<?php
}