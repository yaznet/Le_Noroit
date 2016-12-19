<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "jerome.jaud17@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "Formulaire de contact Le Noroit !\nNom: " . $name . "\nEmail: " . $email . "\nTéléphone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Merci de votre soumission de formulaire",$msg);
echo 'Merci pour votre contribution.  S\'il vous plaît <a href="index.html">Cliquez ici pour revenir sur notre page d\'accueil.';

?>
