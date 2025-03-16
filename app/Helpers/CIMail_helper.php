<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/** send Email Function Using PHPMailer Library */
if (!function_exists('sendEmail')) {
    function sendEmail($mailconfig){
		
		require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

		$mail = new PHPMailer(true);
		$mail->SMTPDebug = 0;
		$mail->isSMTP();
		$mail->Host = 'sandbox.smtp.mailtrap.io';
		$mail->SMTPAuth = true;
		$mail->Username ='892e036a14bb3f';  
		$mail->Password = '********9238';
		$mail->SMTPSecure = 'tls';
		$mail->Port = '2525';
		$mail->setFrom($mailconfig['mail_from_email'],$mailconfig['mail_from_name']);
		$mail->isHTML(true);
		$mail->addAddress($mailconfig['mail_recipient_email'], $mailconfig['mail_recipient_name'] ?? '');
		$mail->Subject = $mailconfig['mail_subject'];
		$mail->Body = $mailconfig['mail_body'];

		if( $mail->send() ){
			return true;
		}else{
				return false;
			}
		}

	}
