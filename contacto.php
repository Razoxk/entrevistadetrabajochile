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
		<link rel="stylesheet" href="css/captcha.css">

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
						<form id="contacto-form" method="POST" action="mailler.php" onsubmit="return checkform(this);">
							<input type="text" class="form-control" name="txtnombre" placeholder="Nombre (*)">
							<input type="text" class="form-control" name="txtcorreo" placeholder="Correo (*)">
							<input type="text" class="form-control" name="txtnumero" placeholder="Telefono">
							<textarea class="form-control" rows="3" name="txtmensaje" placeholder="Mensaje (*)"></textarea>
							<h3>(*) Campos Obligatorios</h3>
<!-- CAPTCHA -->
<br>
<div class="capbox">
<div id="CaptchaDiv"></div>
<div class="capbox-inner">
Escriba el numero indicado arriba:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="10"><br>

</div>
</div>
<br><br>
<!-- CAPTCHA -->

                            <button class="btn btn-default" type="submit" onclick='alert("Hemos recibido su mensaje. Le contactaremos a la brevedad.")'>Enviar</button><br><br>
                        </form>

<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>


					</div>
					<div class="col-md-6 col">
						<!-- map -->
				
						<a href="https://goo.gl/maps/YPtrhDcU1xzQwM487"><img src="img/map1.PNG" class="img-fluid img-responsive" alt="Responsive image"></a>

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
