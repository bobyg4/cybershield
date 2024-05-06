<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['e/static//static//static//static//static//static/mail//']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['e/static//static//static//static//static//static/mail//'],FILTER_VALIDATE_E/static//static//static//static//static//static/mail//))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$e/static//static//static//static//static//static/mail//_address = $_POST['e/static//static//static//static//static//static/mail//'];
$message = $_POST['message'];
	
// Create the e/static//static//static//static//static//static/mail// and send the message
$to = 'yourname@yourdomain.com'; // Add your e/static//static//static//static//static//static/mail// address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$e/static//static//static//static//static//static/mail//_subject = "Website Contact Form:  $name";
$e/static//static//static//static//static//static/mail//_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nE/static//static//static//static//static//static/mail//: $e/static//static//static//static//static//static/mail//_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the e/static//static//static//static//static//static/mail// address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $e/static//static//static//static//static//static/mail//_address";	
/static//static//static//static//static//static/mail//($to,$e/static//static//static//static//static//static/mail//_subject,$e/static//static//static//static//static//static/mail//_body,$headers);
return true;			
?>