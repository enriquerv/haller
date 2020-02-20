<?php 

	
	if(isset($_REQUEST['send_mail'])){
		date_default_timezone_set('Etc/UTC');
		ini_set("display_errors",1);
		require 'mailer/PHPMailerAutoload.php';
		/* Webmasters */
		$mail = new PHPMailer;
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$webmaster = "haller.web2019@gmail.com";
		$mail->Username = $webmaster;
		$mail->Password = "Haller2019_1";
		$mail->setFrom($webmaster, 'Contacto WEB');
		$mail->Subject = "Contacto Web Haller";
		$mail->IsHTML(true);
		$mail->CharSet = "UTF-8";
		if($_REQUEST['type'] == 'instituto')
			$tipo = "Instituto Rafael Haller";
		else
			$tipo = "Centro Universitario Haller";
		$body_msg_master = '
			Se han puesto en contacto a través de la web:<br><br>'.
			'<b>Nombre:</b> '.$_REQUEST['name'].'<br>'.
			'<b>Teléfono:</b> '.$_REQUEST['phone'].'<br>'.
			'<b>Correo:</b> '.$_REQUEST['email'].'<br>'.
			'<b>Tipo:</b> '.$tipo.'<br>'.
			'<b>Mensaje:</b> '.$_REQUEST['tarea'].'<br>';
		$mail->msgHTML($body_msg_master);
		$mail->addAddress('enrique.rv0704@gmail.com', "Enrique Rodriguez");
		$mail->addAddress('inncrediproductions@gmail.com', "Inncredi Productions");
		$mail->addAddress('haller.vinculacion@gmail.com', "Haller vinculacion");
		 
		$mail->send();
	}




?>