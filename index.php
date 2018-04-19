<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>



<div class="page-container">
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">PROVIT</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="brand" href="index.php">INICIO</a></li>
        <li><a href="vistas/nosotros.php">NOSOTROS</a></li>
        <li><a href="vistas/servicios.php">SERVICIOS</a></li>
        <li><a href="vistas/contacto.php">CONTACTO</a></li>
      </ul>
    </div>
</nav>

<div class="cont-logtext">
  <figure class="logo pull-left">
    <img src="img/provit.png" alt="PROVIT" class="img-responsive">
  </figure>
  <p class="texth pull-right">Somos expertos en la TRANSFORMACIÓN <br> de empresas</p>
</div>
</div>

<div class="section cont-se" style="padding:5%;">
      <div class="container">
        <h1 class="text-center tit-ac" style="color: #03636B;"><i class="fas fa-book"></i> ASESORIA Y CONSULTORIA</h1> <br class="delete-br"><br class="delete-br">
        <div class="row">
          <div class="col-md-4 col-md-offset-2">
            <div class="imagen"></div>
            <h2 class="tit-ach2">Asesoria</h2>
            <p class="texto">Es un servicio profesional, que orienta al directivo de una organización. Es una guía de expertos que responde a dudas específicas, resuelve problemas concretos y apoya a las organizaciones en los trámites necesarios para su operación.</p>
          </div>
          <div class="col-md-4">
            <div class="imagen2">
              <!-- <img src="img/uno.jpg" class="img-responsive"> -->
            </div>
            <h2 class="tit-ach2">Consultoria</h2>
            <p class="texto">Es un servicio profesional especializado que puede ayudar a la dirección general de las organizaciones a enfrentar situaciones que impiden la operación plena del negocio.</p>
          </div>

        </div>
      </div>
    </div>

<div class="conten1">
    <p class="textoconten1">TODOS GANAN CON ADMINISTRACIÓN AUTOMATIZADA.</p>
    <div class="iconos">
      <i class="fa fa-users fa-5x" aria-hidden="true"></i>
      <p style="margin-top: 3%; color: #055142;">EMPLEADOS</p>
    </div>
    <div class="iconos">
      <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
      <p style="margin-top: 3%; color: #055142;">SOCIOS</p>
    </div>
    <div class="iconos">
      <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
      <p style="margin-top: 3%; color: #055142;">CLIENTES</p>
    </div>

    <div class="boton">
      <a href="vistas/contacto.php"><button type="button" class="btn btn-outline btn-success btn-lg">¡CONTACTANOS AHORA!</button></a>
    </div>
  </div>



<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>