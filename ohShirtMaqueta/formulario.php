			<?php
			// Envío de mail
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$mensaje = $_POST['textarea'];
			$asunto = "Mail desde web de OhShirt! ";
			
			$dest = "francisco.stiglich@gmail.com";
			
			$cuerpo = " Muchas gracias, $nombre, por tu mensaje. Te contestaremos a la brevedad.";
			
			$datos= " $nombre ($email) envió el siguiente mensaje:  $mensaje ";
			mail($dest, $asunto, $datos);
			
			//Mail al usuario
				#Cabecera / headers
					// Para poder enviar HTML y caracteres especiales
							$cabeceras = 'MIME-Version: 1.0' . "\r\n";
							$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			
			mail($email, $asunto,$cuerpo,$cabeceras);
			
			
			
			//
             echo "Mensaje enviado.";
			?>
		

