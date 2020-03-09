<?php

// Guardar los datos recibidos en variables:
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$servicios = $_POST['servicios'];
$quien = $_POST['quien'];
$comentario = $_POST['mensaje'];
// Definir el correo de destino:
$dest = "preguntanos@jetmedia.com.co,josstell@gmail.com,codigojosstell@hotmail.com";
$asunto = "Nuevo contacto de jetmedia";
 

// MULTI-HEADERS Content-Type: multipart/mixed and Boundary is mandatory.
$headers = "MIME-Version: 1.0;\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: jetmedia.com.co <preguntanos@jetmedia.com.co>'."\r\n".'X-Mailer: PHP/' . phpversion();
//cuerpo del correo

$mensaje = "
	<html>
	<head>
		<title> Contacto Jetmedia.com.co</title>
	
	<body style='background:#EEE; padding:30px;'>
		<h2 style='color:#767676;'>Mensaje de Jetmedia.com.co</h2>";

$mensaje .= "
		<strong style='color:#0090C6;'>Nombre Contacto: </strong>
		<span style='color:#767676;'>" . $nombre . "</span><br>";

$mensaje .= "
		<strong style='color:#0090C6;'>Telefono: </strong>
		<span style='color:#767676;'>" . $telefono . "</span><br>";

$mensaje .= "
		<strong style='color:#0090C6;'>Correo: </strong>
		<span style='color:#767676;'>" . $email . "</span><br>";

$mensaje .= "
		<strong style='color:#0090C6;'> Interesado en:</strong>
		<br><b>" . $servicios . "</b><br>";

$mensaje .= "
		<strong style='color:#0090C6;'> El solicitante es:</strong>
		<br><b>" . $quien . "</b><br>";

$mensaje .= "
		<strong style='color:#0090C6;'> Mensaje</strong>
		<br><b>" . $comentario . "</b> </br>";

$mensaje .= "</body></html>";


 
//php mailer
include_once('class.phpmailer.php');
$mail = new PHPMailer();//objecto de tipo phpmailer
//$mail->isSMTP();
//$mail->SMTPAuth = true; //autentificacion del smtp
//$mail->Host = 'smtp.gmail.com';//servidor smtp de gmail, host de hotmail es :smtp.live.com
//$mail->Port = 465; //puerto del servidor de gmail, puerto de hotmail es :587 0 25
$mail->From = $email;
$mail->FromName = 'Contacto Pagina web'; //remitente del correo
$mail->AddAddress($dest); //destinatarios
$mail->addCC('codigojosstell@hotmail.com');
//$mail->addBCC('bcc@example.com');
//$mail->Username = 'josstell@gmail.com'; //usuario de gmail
//$mail->Password = 'ojodorado'; //contraseña
$mail->Subject = $asunto; //asunto
$mail->Body = $mensaje; //contenido del correo
$mail->wordwrap = 50; //numero de columnas del mensaje
$mail->MsgHTML($mensaje); //cuerpo de mensaje en formato html
//$mail->AddAttachment($destino); archivo que se subio al servidor y lo ajuntamos

 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if ($mail->Send()) { //enviamos el correo
		echo "
			<script type='text/javascript'>
				swal('¡Correo enviado con éxito!',
				 'Pronto nos comunicaremos contigo',
				 'success' 
					);
			</script>
		";
 
	 
	}else{
		echo "
			<script type='text/javascript'>
				swal('¡Oops...!', 
						'Lo sentimos el correo no fue enviado', 
						'error'
					);
			</script>
		".$mail->ErrorInfo;

}
   echo "
			<script type='text/javascript'>  
            function explode(){
                location.href='index.php';
                }
            setTimeout(explode, 2000);
        </script>";