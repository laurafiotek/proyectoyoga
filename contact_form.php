<?php
	// contact_form.php
	

	// Conseguir los datos
	$name   = $_POST['name'];
	$email    = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	//conecta con bd

	include("conexion.php");

	if(mysqli_connect_errno($conexion)){
    	//Si no funcionó, mostramos el mensaje de error
    	echo "No se pudo conectar porque: " . mysqli_connect_error();
	} else {
		$insert_contact = "INSERT INTO contacts(name, email, phone, message)
							VALUES ('$name', '$email', '$phone', '$message');";

		mysqli_query ($conexion, $insert_contact);

		if ($name == "" or $email == "" or $phone == "" or $message == "" ){
			echo "No completaste todos los campos.";
		} else {
			// 1 o más separados por coma
			$dest = "laurafiotek@gmail.com";
			$sub  = "$name desde dyhana.com";
			$body  = "$name quiere recibir más información acerca de Dhyana: $message Contáctate al $phone para comunicarte con $name.";
			
			
			mail($dest, $sub, $body);
			
			// Le enviamos mail a la persona que completó el formulario
			
			// Para poder enviar HTML y caracteres especiales
			$cabeceras = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
					
			// Cabeceras adicionales 2
			$cabeceras .= 'From: Dhyana Yoga'."\r\n";
		
			// Agregamos el cuarto parámetro
			mail($email, "¡Recibimos tu consulta!", "Muchas gracias por contactarte con Dhyana Yoga. A la brevedad nos estaremos comunicando contigo para contestarte cualquier duda. 
			Que tengas una gran semana.
			Namaste.", $cabeceras);
			
			header('Location: contact_success.php');
			
		} // cierra else
	}
?>

