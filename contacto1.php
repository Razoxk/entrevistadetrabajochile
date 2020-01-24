<link rel="stylesheet" href="css/captcha.css">

<section id="contact-form">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>Contacto</h2>
					</div>				
					<div class="col-md-6">
						<form id="contacto-form" method="POST" action="mailler.php" onsubmit="return checkform(this);">
                            <input type="text" class="form-control" name="txtnombre"placeholder="Nombre (*)">
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
					<div class="col-md-6">
						<!-- map -->				
							<a href="https://goo.gl/maps/YPtrhDcU1xzQwM487"><img src="img/map1.PNG" class="img-fluid img-responsive" alt="Responsive image"></a>
							
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6661.200262556395!2d-70.564432!3d-33.407595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cedd1d330ced%3A0x917b72cb89aaef4c!2sAv.%20Apoquindo%206410%2C%20Oficina%20212%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1576195460270!5m2!1ses-419!2scl" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen="">
							</iframe> -->
<!--/map-->

					</div>
				</div>
			</div>
		</section>


