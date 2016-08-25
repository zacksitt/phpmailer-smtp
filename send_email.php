<?php

require_once "./php_mailer/class.phpmailer.php";
$mail = new PHPMailer();
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "user name";// ur gmail
		$mail->Password = "Password"; // ur gmail password
		$mail->SetFrom("from email");
		$mail->AddAddress("to email", "Josh Adams");
	
		$mail->Subject = "Here is the subject";
		$mail->Body    = "This is the HTML message body <b>in bold!</b>";
	
		if(!$mail->Send())
		{
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
		}

		echo "Message has been sent";
?>
