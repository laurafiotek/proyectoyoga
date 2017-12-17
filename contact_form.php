<?php
	// contact_form.php
	
	// Conseguir los datos
	$name   = $_POST['name'];
	$email    = $_POST['email'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];
	

    

	if ($name == "" or $email == "" or $tel == "" or $message == "" ){
		echo "No completaste todos los campos.";
	} else {
		
		// 1 o más separados por coma
		$dest = "laurafiotek@gmail.com";
		$sub  = "$name desde dyhana.com";
		$body  = "$name quiere recibir más información acerca de Dhyana: $message. Contáctate al $tel para comunicarte con $name.";
        
        
		mail($dest, $sub, $body);
		
		// Le enviamos mail a la persona que completó el formulario
		
// Para poder enviar HTML y caracteres especiales
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		
// Cabeceras adicionales 2
$cabeceras .= 'From: Dhyana Yoga'."\r\n";
	  
	// Agregamos el cuarto parámetro
		mail($email, "Recibí tu mail!", "Te contestaremos pronto.", $cabeceras);
		
		echo "Mail enviado, verifica tu casilla de correo no deseado. :)";
		
		echo "<br> $cuerpo";
		
	} // cierra else
	
	
	
?>

