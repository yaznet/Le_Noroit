<?php

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                     	// Enable verbose debug output

$mail->Host = "ssl://localhost:25";
$mail->SMTPAuth = true;   
$mail->Username = "";
$mail->Password = ""; 

$mail->setFrom('jerome.jaud17@gmail.com', 'Restaurant Le Noroit');
$mail->addAddress('jerome.jaud17@gmail.com', 'Jérôme Jaud');
$mail->addAddress($_POST['email']);
$mail->Subject  = 'Formulaire de contact restaurant-lenoroit.fr';
$mail->Body     = "Formulaire de contact restaurant-lenoroit.fr :\nNom : " . $_POST['name'] . "\nEmail : " . $_POST['email'] . "\nTéléphone : " . $_POST['phone'] . "\nMessage : " . $_POST['message'];

if(!$mail->send()) {
  echo 'Le message n\'a pas été envoyé.';
  echo 'Erreur Mail: ' . $mail->ErrorInfo;
} else {
  echo 'Le message a été envoyé.';
  header("Location: index.html");
}