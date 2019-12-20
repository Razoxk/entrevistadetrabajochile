<?php

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3; 
// Enable verbose debug output
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pablo.orellanaubilla@gmail.com';                 // SMTP username
$mail->Password = 'Decode.2019!';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                     // TCP port to connect to

$mail->setFrom('pablo.orellanaubilla@gmail.com.cl', 'Mailer');
$mail->addAddress($correo, $nombre);     

$mail->Subject = 'Aqui va el Asunto';
$mail->Body    = $mensaje;

if(!$mail->send()) {
    echo 'Error, mensaje no enviado';
    echo 'Error del mensaje: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje se ha enviado correctamente';
    
}