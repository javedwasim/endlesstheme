<?php
require_once 'vendor/autoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jwanjum@gmail.com';                 // SMTP username
$mail->Password = 'polkmn-manjum';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to
$mail->Port = 465;                                    // TCP port to connect to

//$mail->setFrom('javedafaq@gmail.com', 'Mailer');
$mail->From = 'javedafaq@gmail.com';
$mail->FromName = 'javed wasim';
$mail->addReplyTo('info@example.com', 'Information');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('javedafaq@gmail.com');               // Name is optional

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

/* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);   */                                // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

var_dump($mail->send());

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
