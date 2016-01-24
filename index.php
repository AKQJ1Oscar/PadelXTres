<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 21/05/2015
 * Time: 22:09
 */

// Start session
session_start();

// Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pádel x tres</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/padelxtres.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="img/favicon.ico">

    <style>
        .err {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #a94442;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            border-radius: 5px;
        }
        #box {
            background: rgba(31, 31, 31, 0.5);
            border: 10px solid rgba(31, 31, 31, 0.0);
            border-radius: 5px;
            padding-left: 40px;
            padding-right: 40px;
            margin-top: 40px;
        }
        .floating-label-form-group-with-value label {
            top: 0;
            color: #999;
            opacity: 1;
        }
        .floating-label-form-group-with-focus label {
            color: #999;
        }
        body {
            background: url(img/login.jpg);
            background-size: cover;
        }
        h1 {
            color: #ffffff;
        }
        @media(max-width:768px) {
            body {
                background: url(img/loginxs.jpg);
                background-size: cover;
            }
        }
    </style>
</head>
<body>
    <footer id="contact" style="padding-bottom: 0">
        <div class="container">
            <div class="row col-sm-12">
                <!-- xs -->
                <h1 id="titulo" class="text-center hidden-sm hidden-md hidden-lg" style="font-size: 40px; margin-top: 0;">Pádel x tres</h1>
                <!-- sm -->
                <div class="hidden-xs hidden-md hidden-lg col-sm-7 col-sm-offset-1" style="padding-left: 0;">
                    <h1 id="titulo" style="font-size: 5em">Pádel</h1>
                    <h1 id="titulo" style="font-size: 5em">x tres</h1>
                </div>
                <img class="hidden-xs hidden-md hidden-lg" src="img/loginlogo.png" alt="Logo de Padel por tres" style="padding-left: 0px; margin-left: -20px; padding-top: 15px; height: 180px;">
                <!-- md -->
                <div class="hidden-xs hidden-sm hidden-lg col-md-6 col-md-offset-2" style="padding-left: 0;">
                    <h1 id="titulo" style="font-size: 6em">Pádel</h1>
                    <h1 id="titulo" style="font-size: 6em">x tres</h1>
                </div>
                <img class="hidden-xs hidden-sm hidden-lg" src="img/loginlogo.png" alt="Logo de Padel por tres" style="padding-left: 0px; margin-left: -20px; padding-top: 15px; height: 210px;">
                <!-- lg -->
                <div class="hidden-xs hidden-sm hidden-md col-lg-6 col-lg-offset-2" style="padding-left: 0;">
                    <h1 id="titulo">Pádel</h1>
                    <h1 id="titulo">x tres</h1>
                </div>
                <img class="hidden-xs hidden-sm hidden-md" src="img/loginlogo.png" alt="Logo de Padel por tres" style="padding-left: 0px; margin-left: -20px; padding-top: 15px;">
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4" id="box">
                    <form name="loginform" action="login_exec.php" method="post">
                        <table class="col-xs-12" border="0" align="center" cellpadding="2" cellspacing="5">
                            <tr>
                                <td colspan="2">
                                    <!-- Muestra mensaje de error -->
                                    <?php
                                    if(isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
                                        echo '<ul class="err">';
                                        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                            echo '<li>',$msg,'</li>';
                                        }
                                        echo '</ul>';
                                        unset($_SESSION['ERRMSG_ARR']);
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <div class="row control-group error">
                            <div class="form-group col-xs-10 col-xs-offset-1 floating-label-form-group controls" style="margin-top: 16px;">
                                <label for="nombre">Nickname</label>
                                <i class="fa fa-user-secret fa-fw"></i>
                                <input type="text" name="user" class="form-control" placeholder="Nickname" required data-validation-required-message="Por favor introduce tu nickname." aria-invalid="true" style="color: #ddd;">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group error">
                            <div class="form-group col-xs-10 col-xs-offset-1 floating-label-form-group controls" style="margin-top: 16px;">
                                <label for="password">Contraseña</label>
                                <i class="fa fa-key fa-fw"></i>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required data-validation-required-message="Por favor introduce tu contraseña." aria-invalid="true" style="color: #ddd;">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input class="btn btn-light btn-lg hidden-xs" name="" type="submit" value="Login" style="margin-left: -10px; margin-right: 15px;"/>
                                <a href="#" data-toggle="modal" data-target="#reg" class="btn btn-light btn-lg hidden-xs">¿No tienes cuenta?</a>
                                <input class="btn btn-light btn-lg hidden-sm hidden-md hidden-lg" name="" type="submit" value="Login" style="font-size: 16px; margin-top: 5px;"/>
                                <a href="#" data-toggle="modal" data-target="#reg" class="btn btn-light btn-lg hidden-sm hidden-md hidden-lg" style="font-size: 16px; margin-top: 5px;">¿No tienes cuenta?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="reg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2 class="text-center">Crear cuenta</h2>
                                <hr class="small hr_black">
                                <form action="formulario/registro.php" method="POST">
                                    <div class="row control-group error">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="nombre">Nombre</label>
                                            <i class="fa fa-user fa-fw"></i>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required data-validation-required-message="Por favor introduce tu nombre." aria-invalid="true">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group error">
                                        <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 16px;">
                                            <label>Apellidos</label>
                                            <i class="fa fa-sitemap fa-fw"></i>
                                            <input type="text" class="form-control" placeholder="Apellidos" required data-validation-required-message="Por favor introduce tus apellidos." aria-invalid="true">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group error">
                                        <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 16px;">
                                            <label for="nick">Nickname</label>
                                            <i class="fa fa-user-secret fa-fw"></i>
                                            <input type="text" name="user" class="form-control" placeholder="Nickname" required data-validation-required-message="Por favor introduce tu nickname." aria-invalid="true">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group error">
                                        <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 16px;">
                                            <label for="email">Correo electrónico</label>
                                            <i class="fa fa-at fa-fw"></i>
                                            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required data-validation-required-message="Por favor introduce tu dirección de correo electrónico." aria-invalid="true">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group error">
                                        <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 16px;">
                                            <label for="password">Contraseña</label>
                                            <i class="fa fa-key fa-fw"></i>
                                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required data-validation-required-message="Por favor introduce tu contraseña." aria-invalid="true">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <input class="btn btn-dark btn-lg" name="submit" type="submit" value="Registrarme" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/contact.js"></script>
</body>
</html>