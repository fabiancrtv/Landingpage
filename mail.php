<?php

	$nombre = $_GET['nombre'];
	$email = $_GET['email'];
	$comentario = $_GET['comentario'];

	$headers = 'From: agregar correo aca' ."\r\n".
				'Reply-To: agregar correo aca' . "\r\n".
				'X-Mailer: PHP/' . phpversion();



	mail('agregar correo aca', 'prueba de envio Matias', $comentario, $headers);
	// to, subject, message

	echo 'enviado';

?><?php

	$nombre = $_GET['nombre'];
	$email = $_GET['email'];
	$comentario = $_GET['comentario'];

	$headers = 'From: agregar correo aca' ."\r\n".
				'Reply-To: agregar correo aca' . "\r\n".
				'X-Mailer: PHP/' . phpversion();



	mail('agregar correo aca', 'prueba de envio Matias', $comentario, $headers);
	// to, subject, message

	echo 'enviado';
agregar correo aca
?>