<?php 

	if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "contactenos@amarresdelcorazon.info";
$email_subject = "Contacto desde el sitio web";
$email_from = "contactenos@amarresdelcorazon.info";

// Aquí se deberían validar los datos ingresados por el usuario

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Pais: " . $_POST['pais'] . "\n";
$email_message .= "Teléfono: " . $_POST['tel'] . "\n";
$email_message .= "Comentarios: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

//echo "¡El formulario se ha enviado con éxito!";
header('Location: index.php?enviado=1');
}


 ?>