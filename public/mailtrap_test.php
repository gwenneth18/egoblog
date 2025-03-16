<?php
// This is a completely standalone test, outside of CodeIgniter
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Starting Mailtrap test...<br>";

$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '51a8f0ea6dba04';
$mail->Password = '********02ee'; // Replace with your actual password
$mail->Port = 2525;
$mail->SMTPSecure = ''; // Try without encryption first

$mail->setFrom('test@example.com', 'Test Sender');
$mail->addAddress('recipient@example.com', 'Test Recipient');
$mail->Subject = 'Mailtrap Test Email';
$mail->Body = 'This is a test email to debug Mailtrap authentication.';

try {
    echo "Attempting to send email...<br>";
    $mail->send();
    echo "Email sent successfully!<br>";
} catch (Exception $e) {
    echo "Email could not be sent.<br>";
    echo "Error: " . $mail->ErrorInfo . "<br>";
}