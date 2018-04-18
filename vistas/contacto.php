<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
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
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="nosotros.php">NOSOTROS</a></li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a class="brand" href="contacto.php">CONTACTO</a></li>
      </ul>
    </div>
</nav>

<div class="">
  <figure class="logo pull-left">
    <img src="../img/provit.png" alt="PROVIT" class="img-responsive">
  </figure>
  <p class="texth pull-right">Somos expertos en la TRANSFORMACIÓN <br> de empresas</p>
</div>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.577669209646!2d-89.62320208589254!3d21.009559886008784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a8a8a3176b%3A0x6b3bd0daeb0f6bb1!2sCalle+9+292%2C+Fraccionamiento+del+Nte%2C+97120+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1524074269686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <article class="elegir2">
 <h1 class="text-center h1por">Datos de contacto</h1>
 <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-street-view"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Dirección</h4>
                    <h5 class="text-center">C. 9 #292 por 38 y 40 Col. Fracc. del Norte, Mérida, Yucatán. CP. 97120</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-clock-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Horario</h4>
                    <h5 class="text-center">Lunes a Viernes de 9am a 6pm</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-phone"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Teléfono</h4>
                    <h5 class="text-center">PENDIENTE</h5>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-envelope"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Correo</h4>
                    <h5 class="text-center">info@provitasesores.com</h5>
                </div>
            </div>
        </div>
</article>

<div class='container' style="margin-top: 5%;">
<h2 style="color: #811B31; text-align: center; margin-bottom: 3%;">Formulario de contacto</h2>
    <div class='row'>
        <div class='col-sm-12 col-md-10 col-md-offset-1'>
            <div class='well'>
                <form onSubmit="return false">
                    <div class='row'>
                        <div class='col-xs-12 col-sm-4'>
                            <div class='form-group'>
                                <label for='fname'>Nombre completo</label>
                                <input type='text' id="txtNOMBRE" name='fname' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='lname'>Teléfono</label>
                                <input type='text' id="txtTELEFONO" name='lname' class='form-control' />
                            </div>
                            <div class='form-group'>
                                <label for='email'>Email</label>
                                <input type='text' id="txtCORREO" name='email' class='form-control' />
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-8'>
                            <div class='form-group'>
                                <label for='message'>Mensaje</label>
                                <textarea class='form-control' id="txtCOMENTARIO" name='message' rows='10'></textarea>
                            </div>

                                                        <div id="_AJAX_PRE_"></div>
                            <div class='text-right'>
                                <input type='submit' class='btn btn-success' onclick="sendCORREO()" value='ENVIAR' />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
