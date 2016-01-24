<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pádel x tres</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="../img/favicon.ico">

    <style>
        h4 {
            padding-top: 150px;
            text-align: center;
        }
        .alert {
            margin-top: 50px;
        }
    </style>
</head>

<?php
// Check for empty fields
if(empty($_POST['name_']) || empty($_POST['email_']) || empty($_POST['phone_']) || empty($_POST['message_']) || !filter_var($_POST['email_'],FILTER_VALIDATE_EMAIL)) {
    echo '<div class="alert alert-danger alert-dismissible col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Error al enviar el mensaje</div>';
    echo '<h4><input class="btn btn-lg" type="button" value="Volver" onClick="history.back()"></h4>';
    return false;
}
	
$name = $_POST['name_'];
$email_address = $_POST['email_'];
$phone = $_POST['phone_'];
$message = $_POST['message_'];
	
// Create the email and send the message
$to = 'oscarvb94@gmail.com'; // This is where the form will send a message to.
$from = "noreply@padelxtres.co.nf"; // This is the email address the generated message will be from.
$email_subject = "Padelxtres - Nuevo mensaje de $name";
$email_body = "\nHas recibido un nuevo mensaje del formulario de contacto.\n\n"."Detalles del mensaje:\n	Nombre: $name\n	Correo electrónico: $email_address\n	Teléfono: $phone\n\nMensaje:\n	$message";
$headers .= "De: $from";
mail($to,$email_subject,$email_body,$headers, "-f " . $from);
echo '<div class="alert alert-success alert-dismissible col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Mensaje enviado correctamente</div>';
echo '<h4><input class="btn btn-lg" type="button" value="Volver" onClick="history.back()"></h4>';
return true;
?>

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>