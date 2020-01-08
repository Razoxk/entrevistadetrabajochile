<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>entrevistadetrabajochile.cl/</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/preloader.css">
		<link rel="stylesheet" href="css/image.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">

	</head>
	<body style="padding-top: 320px;" id="top">
	
		
	<header id="navigation" class="navbar-fixed-top animated-header">


<?php

include ("header.php");

?>


		
	<div class="container">			
		<div class="navbar-header">
			<!-- responsive nav button -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- /responsive nav button -->
			
			<!-- logo  -->
			
				
			
			<!-- /logo -->
		</div>

		<?php
		
		include ("navbar.php");

		?>

		
	</div>
</header>


	<div class="wrapper">	


        
	<section id="contact-form">
	<div class="container" style="margin-top:-50px;">
				<div class="row">
					<div class="title">
						<h2>Contacto</h2>
					</div>				
					<div class="col-md-6">
						<form id="contacto-form" method="POST" action="mailler.php">
                            <input type="text" class="form-control" name="txtnombre"placeholder="Nombre (*)">
							<input type="text" class="form-control" name="txtcorreo" placeholder="Correo (*)">
							<input type="text" class="form-control" name="txtnumero" placeholder="Telefono">
							<textarea class="form-control" rows="3" name="txtmensaje" placeholder="Mensaje (*)"></textarea>
							<h3>(*) Campos Obligatorios</h3>
                            <button class="btn btn-default" type="submit" onclick='alert("Hemos recibido su mensaje. Le contactaremos a la brevedad.")'>Enviar</button><br><br>
                        </form>
					</div>
					<div class="col-md-6 col">
						<!-- map -->
				
						<div class="">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6661.200262556395!2d-70.564432!3d-33.407595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cedd1d330ced%3A0x917b72cb89aaef4c!2sAv.%20Apoquindo%206410%2C%20Oficina%20212%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1576195460270!5m2!1ses-419!2scl" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

	                   </div><!--/map-->

					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<?php
			include ("footer.php");
			?>
  <!-- Footer -->
	</div>

		<!-- load Js -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/html5lightbox.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.scrollUp.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nav.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>