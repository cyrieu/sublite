<?php
	require_once($dirpre.'PHPMailer/PHPMailerAutoload.php');
	function sendgmail($to, $from, $subject, $message, $cc = null, $bcc = null) {
		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'info@sublite.net';                 // SMTP username
		$mail->Password = $GLOBALS['gmailpass'];              // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
		
		if (count($from) > 1) {
			$mail->setFrom($from[0], $from[1]);
			$mail->addReplyTo($from[0], $from[1]);
		} else {
			$mail->setFrom($from);
			$mail->addReplyTo($from);
		}
		foreach($to as $email) {
			if (count($email) > 1) {
				$mail->addAddress($email[0], $email[1]);
			} else {
				$mail->addAddress($email);
			}
		}
		if (!is_null($cc)) {
			$mail->addCC($cc);
		}
		if (!is_null($bcc)) {
			$mail->addBCC($bcc);
		}
		$mail->WordWrap = 80;
		$mail->isHTML(true);
		 
		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = strip_tags($message);
		 
		if (!$mail->send()) {
		   return $mail->ErrorInfo;
		}
		
		return true;
	}
?>