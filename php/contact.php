<?php
$emailSuccess = 0;

if(isset($_POST['name'])){
	
	$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
	$emailfrom = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);

	$to = "willcaddy24@gmail.com";
	$subject = "Portoflio Contact Form";
	
	$headers = 'From: '.$name .' <'.$emailfrom .'>' . "\r\n" .
    'Reply-To: '.$emailfrom .' '. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	$emailSuccess = 1;
	
}
?>