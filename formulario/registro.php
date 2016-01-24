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
require_once('funciones.php');
conectar('fdb13.biz.nf', '1854332_tewc', 'rm193210', '1854332_tewc');

//Recibir
$nombre = strip_tags($_POST['nombre']);
$email = strip_tags($_POST['email']);
$user = strip_tags($_POST['user']);
$password = strip_tags($_POST['password']);

$query = @mysql_query('SELECT * FROM usuarios WHERE user="'.mysql_real_escape_string($user).'"');
if($existe = @mysql_fetch_object($query)) {
    echo '<div class="alert alert-danger alert-dismissible col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>El usuario '.$user.' ya existe</div>';
    echo '<h4><input class="btn btn-lg" type="button" value="Volver" onClick="history.back()"></h4>';
}
else {
	$meter = @mysql_query('INSERT INTO usuarios (nombre, email, user, password) values ("'.mysql_real_escape_string($nombre).'", "'.mysql_real_escape_string($email).'", "'.mysql_real_escape_string($user).'", "'.mysql_real_escape_string($password).'")');
	if($meter) {
        echo '<div class="alert alert-success alert-dismissible col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Te has registrado correctamente</div>';
        echo '<h4><input class="btn btn-lg" type="button" value="Volver" onClick="history.back()"></h4>';
	} else {
        echo '<div class="alert alert-danger alert-dismissible col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Hubo un error en el registro</div>';
        echo '<h4><input class="btn btn-lg" type="button" value="Volver" onClick="history.back()"></h4>';
	}
}
?>

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>