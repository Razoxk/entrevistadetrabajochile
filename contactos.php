<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/estilos_contactos.css">
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  
  
  <div class="container">
  
  
<form action="enviar.php" method="post" >
  <h2 class="intro">Contacte con nosotros</h2>
  
  <p class="intro">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</p>
  
  <hr>
  
  <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
   
        
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        
        <input type="email" name="correo" placeholder="Correo" required>
         
        <input type="number" pattern="[0-9]{10}"  name="telefono" placeholder="Teléfono" required>
          
         <input type="text" name="empresa" placeholder="Empresa Opcional">
          
        <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
  		<p></p>
        <input type="submit" value="Enviar" class="btn btn-outline-primary btn-lg btn-block" >
       
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      		
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6661.200262556395!2d-70.564432!3d-33.407595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cedd1d330ced%3A0x917b72cb89aaef4c!2sAv.%20Apoquindo%206410%2C%20Oficina%20212%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1576195460270!5m2!1ses-419!2scl" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
      </div>
    
  </form>
 
  </div>
  
  
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>