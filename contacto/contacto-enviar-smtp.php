<?php
	$resultado = "";

		$nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
		$mensaje = filter_var($_POST["mensaje"], FILTER_SANITIZE_STRING);

		$sitio = "---Nombre sitio---"
		$emailDest = "---correo destinatario";
		$nombreDest = "Contacto desde $sitio";

		require('class.phpmailer.php');
		require('class.smtp.php');

		$mail = new PHPMailer();

		$mail->IsSMTP(); // Llamamos a la clase SMTP
		$mail->SMTPAuth = true; //Activar la autenticación SMTP

		// Si se requiere seguridad SMTP se descomenta la siguiente linea 

		// $mail->SMTPSecure = 'tls';

		$mail->Host       = "---host---";
		$mail->Port       = 26;
		$mail->Username   = "---correo---";
		$mail->Password   = "---password---";

		$mail->FromName = "$nombre"; //Nombre del remitente

		$mail->Subject = "Contacto de $sitio"; //Asunto del email

		$mail->AddAddress($emailDest, $nombreDest); //Destinatario

		$mail->MsgHTML($nombre . "<br>" . $email . "<br>" . $mensaje); //Mensaje en HTML

		if($mail->Send())
		{
			$resultado = "El mensaje ha sido enviado con exito";

		} else {
			$resultado = "Lo siento ha habido un error al enviar el mensaje";
		}

		echo json_encode($resultado);

?>