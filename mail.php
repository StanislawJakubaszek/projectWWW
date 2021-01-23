<?php $name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "stanislaw_jakubaszek@onet.pl";
$subject = "Contact Form NET CV";
$mailheader = "From: $mail \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>