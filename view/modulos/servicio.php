<?php 
if (isset($_POST['nombre'])) {

peticionController::crear_peticion();
}else{
 
?>
<div class="container mt-5 pt-5 mb-5 pb-5">
    <div class="card w-50  text-white mt-3 border border-warning mx-auto  d-block p-5 mr-5"style="background-color: indigo;">
        <div class="display-6 text-warning text-center">"Quiero saber más"</div>
        <br>
        <form method="POST">

            <div class="form-row ">
                <div class="form-group col-md-10 ">
                    <label for="inputEmail4">Nombre</label>
                    <input type="texto" class="form-control" placeholder="Nombre completo" name="nombre" id="inputEmail4">
                </div>
                <div class="form-group col-md-10">
                <label for="exampleFormControlInput1" >Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@google.com">
                </div>
                <div class="form-group col-md-10">
                <label for="inputPassword4">teléfono</label>
      <input type="texto" class="form-control" name="telefono" placeholder="teléfono de contacto"id="inputPassword4">
                </div>
                <div class="form-group col-md-10">
                <label for="inputEmail4">Dirección</label>
      <input type="texto" class="form-control" name="direccion" placeholder="dirección" id="inputEmail4">
                </div>
          
                <div class="form-group col-md-10">
                <label for="inputEmail4">Descripción </label>
      <input type="texto" class="form-control" name="descripcion" placeholder="Dinos en qué te podemos ayudar" id="inputEmail4">
                </div>
            </div>
           <br>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning "style="color: indigo;">Enviar</button>

                </div>
            </div>

        </form>
    </div>


</div>


<?php
}
?>