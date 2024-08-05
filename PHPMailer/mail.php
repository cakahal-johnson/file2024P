<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'smtp.gmail.com;';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->Username   = 'allenwalker.associate@gmail.com';     // SMTP username
$mail->Password   = 'openmyaccasso';         // SMTP password
$mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                // TCP port to connect to

$mail->setFrom('allenwlker.associate@gmail.com', 'Name');           // Set sender of the mail
$mail->addAddress('allenwlker.associate@gmail.com');           // Add a recipient
$mail->addAddress('allenwlker.associate@gmail.com', 'Name');   // Name is optional
// $mail->addAttachment('url', 'filename');    // Name is optional

$mail->isHTML(true);                                  
$mail->Subject = 'Subject';
$mail->Body    = 'HTML message body in <b>bold</b>!';
$mail->AltBody = 'Body in plain text for non-HTML mail clients';

$mail->send();

// if($mail->send()){
//     echo "IT WAS SENT";
// } else {
//     echo "NOT SENT";
// }

?>