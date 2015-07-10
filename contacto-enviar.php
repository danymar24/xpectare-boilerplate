<?php
	
	$data = json_decode(file_get_contents('php://input'), true);

	// Editar los valores del correo

	// Email receptor 1
	$email_to = "email@email.com" . ", ";

	$email_to .= "email2@email2.com" .", ";
	
	$email_subject = "Registro";
	
	// Correo que envia
	$email_from = "correoenvia@envia.com";

	$headers = "From: " . $email_from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";

	// Agregar campos necesarios para el mensaje
	$email_message = "Nombre: " . $data['nombre']."<br>";
	$email_message .= "Email: ".$data['email']."<br>";
	$email_message .= "Mensaje: ".$data['mensaje']."<br>";

	@mail($email_to, $email_subject, $email_message, $headers);

	echo json_encode("Correo enviado.");

?>
