
<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
// Create the email and send the message
$to = 'contacto@jeisonfallas.com';
$email_subject = "Contactado por:  $name";
$email_body = "ha ressivido un Mensaje a Soluciones Fallas.\n\n"."Los Detalles:\n\nNombre: $name\n\nCorreo: $email_address\n\nAsunto: $subject\n\nMensaje:\n$message";
$headers = "From:contacto@jeisonfallas.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>