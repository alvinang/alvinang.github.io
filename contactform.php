<?php

header( "refresh:4;url=index.html" );

$to = 'alvinangbs@gmail.com';
$subject = 'GitHub.io Contact Form Message';

$name = isset($_POST['name']) && $_POST['name'] ? $_POST['name'] : ''; 
$email = isset($_POST['email']) && $_POST['email'] ? $_POST['email'] : '';
$message = isset($_POST['message']) && $_POST['message'] ? $_POST['message'] : '';
$header = "From: $email";
$mail_sent = mail($to, $subject, $message, $header);

echo $mail_sent ? "I've received your message and will contact you shortly." : "Sorry! Message sending Failed. Please try again.";
?>