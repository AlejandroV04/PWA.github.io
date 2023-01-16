<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="media/logo.png" type="image/png">
        <title>INCODEZA</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="contact.html#mapa">VISITANOS</a>
           					<a href="https://es-la.facebook.com/incodeza/">SOPORTE EN LINEA</a>
           				</div>
           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="https://es-la.facebook.com/incodeza/"><i class="fa fa-facebook"></i></a></li>
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<a class="navbar-brand logo_h" href="index2.html"><img src="media/logo.png" width="200" height="140" alt=""><img src="media/logo.png" width="90" height="50" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index2.html">INICIO</a></li> 
								<li class="nav-item"><a class="nav-link" href="sobrenosotros.html">SOBRE NOSOTROS</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PLANES</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="paquetebasico.html">BÁSICO</a></li>
										<li class="nav-item"><a class="nav-link" href="paqueteresidencial.html">RESIDENCIAL</a></li>
										<li class="nav-item"><a class="nav-link" href="paqueteempresarial.html">EMPRESARIAL</a></li>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="solicitudes.html">SOLICITUDES</a></li>
                                <li class="nav-item"><a class="nav-link" href="index.html">CERRAR SESIÓN</a></li>   
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay2 bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Solicitar un servicio</h2>
						<div class="page_link">
							<a href="index2.html">Inicio</a>
							<a href="solicitudes.php">Solicitudes</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Projects Area =================-->
        <br>
        <center>
        <h1>Lista de servicios solicitados</h1>
<br>
    <?php
    $link = new PDO("mysql:host=localhost;dbname=incodeza","root","");
    ?>

    <table class="table table-striped">
        <thead>    
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>TELEFONO</td>
                <td>LOCALIDAD</td>
                <td>SERVICIO SOLICITADO</td>
                <td>CORREO</td>
                <!--<td>ACCIÓN</td>-->
            </tr>
        </thead>
        <?php foreach($link->query("SELECT * from clientes") as $row){?>
        <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["nombre"], " ", $row["apellidoP"], " ", $row["apellidoM"] ?></td>
            <td><?php echo $row["telefono"] ?></td>
            <td><?php echo $row["localidad"] ?></td>
            <td><?php echo $row["servicio"] ?></td>
            <td><?php echo $row["correo"] ?></td>
            <!--<td><a href="eliminar.php"><button type="button" class="btn btn-danger">Eliminar</button></a></td>-->
        </tr>
        <?php } ?>
    </table>
<!--
<div class="card border-info mb-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Info card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
-->
<br>
<!--
        <form action="agregar.php" method="post">
            <p>Nombre <input type="text" name="nombre" id="nombre" class="nombre"></p>
            <p>Apellido Paterno <input type="text" name="apellidoP" id="apellidoP" class="apellidoP"></p>
            <p>Apellido Materno <input type="text" name="apellidoM" id="apellidoM" class="apellidoM"></p>
            <p>Localidad <input type="text" name="localidad" id="localidad" class="localidad"></p>
            <p>Telefono <input type="number" name="telefono" id="telefono" class="telefono"></p>

            <button type="submit" class="btn btn-primary">Solicitar servicio</button>
        </form>
          <br>
-->
        </center>
        <!--================End Projects Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>NOSOTROS</h3>
                            </div>
                            <p>Somos una empresa joven e innovadora que crea un medio tecnológico de vanguardia local para
                               promover sus productos o servicios 
                            </p>
                            <p style="color: #FFFFFF"><a href="1.-REGISTRO INFORMATICA Y COMUNICACIONES DE ZAMORA, S.A. DE C.V..pdf" target="_blank">Autorización del IFT</a></p>
                            <p style="color: #FFFFFF;"><a href="https://tarifas.ift.org.mx/ift_visor/" target="_blank">Tarifas registradas ante IFT</a></p>
                            <p style="color: #FFFFFF"><a href="3.-Informática y Comunicaciones de Zamora, S.A.S. de C.V.!!Incodeza 562-2019.pdf" target="_blank">Contratos de Prestación de Servicios PROFECO</a></p>
                            <p style="color: #FFFFFF"><a href="4.-Código de Practicas Comerciales.pdf" target="_blank">Código de prácticas comerciales</a></p>
                            <p style="color: #FFFFFF"><a href="5.-cartaderechosminimos.pdf" target="_blank">Carta de derechos mínimos del usuario</a></p>
                            <p style="color: #FFFFFF"><a href="6.-AVISO PRIVACIDAD TELECOMM_INFORMATICA Y COMUNICACIONES DE ZAMORA.pdf" target="_blank">Aviso de privacidad</a></p>
                            <p style="color: #FFFFFF"><a href="7.-TRAMITES.pdf" target="_blank">Catálogo de trámites</a></p>
                            <p style="color: #FFFFFF"><a href="https://www.dof.gob.mx/nota_detalle.php?codigo=5586224&fecha=12/02/2020" target="_blank">Lineamientos de información transparente</a></p>
                            <br>
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </aside>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget news_widget">
                            <div class="f_title">
                                <h3>INCODEZA</h3>
                            </div>
                            <p>una empresa 100% veracruzana con personal capacitado y certificado en diferentes áreas, con más de dos años en el mercado y más de un centenar de clientes satisfechos. </p>
                        </aside>
                    </div>
                    <div class="col-lg-2">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                <h3>SIGUENOS EN</h3>
                            </div>
                            <p>REDES SOCIALES</p>
                            <ul class="list">
                              <li><a href="https://es-la.facebook.com/incodeza/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/incodeza.gtz/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <ul class="list">
                                <div>
                                   <img rel="icon" src="media/logo2.png" type="image/png" height=200px" width="200px">
                                </div>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
