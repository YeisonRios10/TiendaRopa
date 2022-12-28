

<nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5" style="background-color: indigo;">
  <div class="container-fluid" class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1 ">
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>inicio">Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>productos">Productos</a>
                </li>
                <li class="nav-item">
          <a class="nav-link " href="<?php echo $_ENV["url"];?>servicio">Servicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="<?php echo $_ENV["url"];?>asesor">Asesor de tienda</a>
        </li>
      
            </ul>
            <ul>
            <li class="nav-item mt-3  ml-auto">
                    <a class="nav-link badge badge-pill bg-warning text-dark h-80   " 
                        href="<?php echo $_ENV["url"];?>cerrar">cerrar sesión</a>
                </li>
                </ul>
                <div class="text-white ml-2">
                    <?php
        echo @$_SESSION['usuario'];
        ?>
                </div>
        </div>
    </div>
  </div>
</nav>





<!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5" style="background-color: indigo;">

    <div class="container-fluid ">
   <div class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1 ">
        <a class="navbar-brand  " href="<?php echo $_ENV["url"];?>inicio"><img
                src="<?php echo $_ENV["url"];?>view\assets\src\img\logo.jpg" width="80" class="rounded-pill
                ">
            Divas </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
<div class="container" class="col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1 ">

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>inicio">Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>productos">Productos</a>
                </li>
                <li class="nav-item">
          <a class="nav-link " href="<?php echo $_ENV["url"];?>servicio">Servicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="<?php echo $_ENV["url"];?>asesor">Asesor de tienda</a>
        </li>
      
            </ul>
            <ul>
            <li class="nav-item mt-3  ml-auto">
                    <a class="nav-link badge badge-pill bg-warning text-dark h-80   " 
                        href="<?php echo $_ENV["url"];?>cerrar">cerrar sesión</a>
                </li>
                </ul>
                <div class="text-white ml-2">
                    <?php
        echo @$_SESSION['usuario'];
        ?>
                </div>
        </div>
    </div>
    </div>
    
</nav> -->