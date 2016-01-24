<?php
require_once('auth.php');
?>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/padelxtres.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="img/favicon.ico">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End Preloader -->

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-yellow btn-lg pull-right toggle" style="padding-left: 14px"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a style="padding-left: 0">Menú</a>
            </li>
            <li class="hidden-xs">
                <a href="#top1"><span class="fa fa-home"></span> Inicio</a>
            </li>
            <li class="hidden-sm hidden-md hidden-lg">
                <a href="#top2"><span class="fa fa-home"></span> Inicio</a>
            </li>
            <li>
                <a href="#intro"><span class="fa fa-bullseye"></span> Introducción</a>
            </li>
            <li>
                <a href="#noticias01"><span class="fa fa-newspaper-o"></span> Noticias</a>
            </li>
            <li>
                <a href="#tweets"><span class="fa fa-twitter"></span> Twitter</a>
            </li>
            <li>
                <a href="#curiosidades"><span class="fa fa-lightbulb-o"></span> Curiosidades</a>
            </li>
            <li>
                <a href="#historia"><span class="fa fa-bank"></span> Historia del pádel</a>
            </li>
            <li>
                <a href="#ranking"><span class="fa fa-users"></span> Ranking</a>
            </li>
            <li>
                <a href="#torneos"><span class="fa fa-trophy"></span> Torneos</a>
            </li>
            <li>
                <a href="#palas"><span class="glyphicon glyphicon-ice-lolly"></span> Palas</a>
            </li>
            <li>
                <a href="#wpt"><span class="fa fa-diamond"></span> World Padel Tour</a>
            </li>
            <li>
                <a href="#multimedia"><span class="fa fa-photo"></span> Multimedia</a>
            </li>
            <li>
                <a href="#contact"><span class="fa fa-envelope"></span> Registro y contacto</a>
            </li>
            <li>
                <a href="index.php"><span class="fa fa-sign-out"></span> Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="hidden-xs" style="background-color: rgb(13, 71, 187);">
        <section id="top1" class="header" data-speed="10" data-type="parallax">
            <section id="pelota1" class="text-vertical-center" data-speed="2.5" data-type="parallax"></section>
        </section>
    </header>
    <header class="hidden-sm hidden-md hidden-lg" style="height: 50vw;">
        <section id="top2" class="header" data-speed="10" data-type="parallax" style="background-size: 100vw; background-position: 50% -10px;">
            <section id="pelota2" class="text-vertical-center" data-speed="2.5" data-type="parallax"></section>
        </section>
    </header>

    <!-- Intro -->
    <section id="intro" class="about" style="background: url(img/textura.jpg); color: white; text-shadow: 0 0 10px #747464;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 id="titulo" class="text-center hidden-xs">Pádel x tres</h1>
                    <h1 id="titulo2" class="text-center hidden-sm hidden-md hidden-lg">Pádel x tres</h1>
                    <h1>La mejor web de pádel</h1>
                    <a>
                        <img style="padding-top: 25px" src="img/logo.png">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dock -->
    <div id="dock-container" class="hidden-xs" style="background: url(img/textura.jpg)">
        <div id="dock">
            <ul>
                <li><span>Noticias</span><a href="#noticias01"><img src="img/noticias.png"/></a></li>
                <li><span>Twitter</span><a href="#tweets"><img src="img/twitter.png"/></a></li>
                <li><span>Curiosidades</span><a href="#curiosidades"><img src="img/curiosidades.png"/></a></li>
                <li><span>Historia del pádel</span><a href="#historia"><img src="img/historia.png"/></a></li>
                <li><span>Ranking</span><a href="#ranking"><img src="img/ranking.png"/></a></li>
                <li><span>Torneos</span><a href="#torneos"><img src="img/torneos.png"/></a></li>
                <li><span>Palas</span><a href="#palas"><img src="img/palas.png"/></a></li>
                <li><span>World Padel Tour</span><a href="#wpt"><img src="img/wpt.png"/></a></li>
                <li><span>Multimedia</span><a href="#multimedia"><img src="img/multimedia.png"/></a></li>
                <li><span>Registro y contacto</span><a href="#contact"><img src="img/contact.png"/></a></li>
            </ul>
            <div class="base"></div>
        </div>
    </div>

    <!-- Sub -->
    <section id="sub" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="font-size: 24px; font-weight: 500;">“Ganar o perder un partido depende de las ganas que usted tenga de jugar el último tanto” — Björn Borg</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Noticias -->
    <section id="noticias01" class="services noticias">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Noticias</h2>
                    <hr class="small hr_white" style="margin-bottom: 20px">
                </div>
            </div>
        </div>
    </section>
    <aside id="fotosNoticias">
        <!-- Full Page Image Background Carousel Header -->
        <header id="myCarousel" class="carousel slide" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <section id ="fill1" class="fill hidden-xs" data-speed="10" data-type="parallax"></section>
                    <section id ="fill1xs" class="fill hidden-sm hidden-md hidden-lg"></section>
                    <div class="carousel-caption">
                        <h2 class="hidden-xs"><a href="#" data-toggle="modal" data-target="#noticia-1">El sorteo de San Fernando nos depara un apasionante duelo familiar</a></h2>
                        <h2 class="text-center hidden-sm hidden-md hidden-lg"><a href="#" data-toggle="modal" data-target="#noticia-1" style="font-size: 25px">El sorteo de San Fernando nos depara un apasionante duelo familiar</a></h2>
                    </div>
                </div>
                <div class="item">
                    <section id ="fill2" class="fill hidden-xs" data-speed="10" data-type="parallax"></section>
                    <section id ="fill2xs" class="fill hidden-sm hidden-md hidden-lg"></section>
                    <div class="carousel-caption">
                        <h2 class="hidden-xs"><a href="#" data-toggle="modal" data-target="#noticia-2">David Gutiérrez: "Espero que no sea nuestra última final de la temporada"</a></h2>
                        <h2 class="text-center hidden-sm hidden-md hidden-lg"><a href="#" data-toggle="modal" data-target="#noticia-2" style="font-size: 25px">David Gutiérrez: "Espero que no sea nuestra última final de la temporada"</a></h2>
                    </div>
                </div>
                <div class="item">
                    <section id ="fill3" class="fill hidden-xs" data-speed="10" data-type="parallax"></section>
                    <section id ="fill3xs" class="fill hidden-sm hidden-md hidden-lg"></section>
                    <div class="carousel-caption">
                        <h2 class="hidden-xs"><a href="#" data-toggle="modal" data-target="#noticia-3">El pádel sevillano se corona en Barcelona</a></h2>
                        <h2 class="text-center hidden-sm hidden-md hidden-lg"><a href="#" data-toggle="modal" data-target="#noticia-3" style="font-size: 25px">El pádel sevillano se corona en Barcelona</a></h2>
                    </div>
                </div>
            </div>
        </header>
    </aside>
        <!-- Modals -->
        <div class="modal fade" id="noticia-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">El sorteo de San Fernando nos depara un apasionante duelo familiar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Los hermanos Díaz Sangiorgo se enfrentarán en primera ronda del San Fernando Open Trofeo Bahía Sur, la suerte del sorteo nos va a ofrecer un duelo entre Godo Díaz y Matías Díaz en la Ciudad Deportiva de esta localidad gaditana.</p>
                                <p>El destino ha querido que la pareja revelación de Barcelona se vuelva a enfrentar en primera ronda a los granadinos Jesús Espejo y Javier Ruiz, lo que debe preocupar a Juan Martín Díaz y Juani Mieres sus posibles rivales en octavos de final.</p>
                                <p>Por la parte superior del cuadro la nueva pareja Fernando Belasteguin y Willy Lahoz debutarán contra Andoni Bardasco y Nacho González Gadea.</p>
                                <p>En categoría femenina la competición comenzará el miércoles y las ocho primeras parejas no lo harán hasta el jueves, destacable es la reaparición de la malagueña Carolina Navarro tras su operación de apendicitis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="noticia-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">David Gutiérrez: "Espero que no sea nuestra última final de la temporada"</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Sin duda alguna ha sido la sensación del torneo. David Gutiérrez un tipo cercano, con la sonrisa siempre en la cara y un auténtico luchador que como el dice ”siempre trato de ir a ganar en cualquier torneo”. En Barcelona estuvo cerca de lograrlo junto a la que fue la sensación del torneo Luciano Capra. Ahora ya trabajan para el San Fernando Open y no descartan volver a dar la sorpresa.</p>
                                <p> - David, ¿Te esperabas llegar tan lejos?</p>
                                <p>Yo desde que juego al pádel soy muy competitivo, siempre tengo ganas de ganar . Es muy difícil llegar a una final, no siempre sale pero las intenciones están ahí. Nosotros siempre vamos con ganas de ganar, y como le dije a Lucho este torneo era un poco especial. Yo hace 5 años que no jugaba en la posición de revés y le dije antes de comenzar que  este torneo de Barcelona  lo íbamos a hacer muy bien,  y así salió.</p>
                                <p> - ¿Qué tal Luciano Capra, ha sido la revolución del torneo?</p>
                                <p>Yo creo que si fue el jugador del torneo. Me parece que hizo una gran actuación y además fue capaz de ganar a tres cabezas de serie. Por supuesto felicito a Paquito que hizo todos los méritos para coronarse como mejor jugador.</p>
                                <p> - ¿Qué pasó en la final para ser tan desigualada?</p>
                                <p>Yo llegué bien, pero tal vez  Lucho le pudo un poco la presión y llegó mas cansado. Desde el primer momento quería hacerle sentir a la otra pareja que nosotros estábamos presentes, tuvimos muchas oportunidades pero al final no pudo ser.</p>
                                <p> - ¿Vamos a veros en más finales?</p>
                                <p>Yo espero que esta no sea la última, vamos a ir a San Fernando como fuimos a Barcelona. Vamos con ganas de ganar, yo creo que no será nuestra última final.</p>
                                <p> - Cuéntanos esa relación peculiar con la grada de Barcelona…</p>
                                <p>La gente muchas veces no entiende de que va el deporte, no entiende que un pelotazo al cuerpo es punto, y hay gente como yo que tiene eso como arma. Yo ataco muy fuerte al cuerpo, no es a mala intención pero lo hago porque es un arma para mí.  La gente tiene que entender que es nuestro trabajo lo que estamos haciendo, nosotros no nos sentamos a silbar a nadie cuando están haciendo su trabajo. Nosotros vamos a  trabajar y a jugar.</p>
                                <p> - ¿Qué es lo que más te sorprendió de Barcelona?</p>
                                <p>Me sorprendió que nos ganamos al público partido a partido, yo fui el que empezó la gresca y después la gente se animó. A nivel deportivo muy contento porque Barcelona será importante en mi vida.</p>
                                <p> - ¿Qué parejas son favoritas para ti?</p>
                                <p>Mi pareja preferida siempre va a ser Sanyo y Maxi y también Bela y Lima. Pero Paquito y Matías Díaz  o Cristian y Maxi van a llegar lejos. La pre previa y previa son muy serias y duras , no tengo favoritos para esta temporada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="noticia-3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">El pádel sevillano se corona en Barcelona</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Sin dejar de lado la gran actuación de las hermanas Sánchez Alayeto que conquistaron el Estrella Damm Barcelona Master que llevaron al pádel femenino a lo mas alto, esta semana el pádel sevillano se ha coronado.</p>
                                <p>Con la ceremonia de entrega de premios a punto de finalizar dos nombres quedaban por encima del resto, Paquito Navarro (Sevilla) y Vicoria Iglesias Carmona, Sevilla , el mejor jugador y la mejor jugadora del torneo. Los dos sevillanos se llevaban el Trofeo Adeslas tras una de las mejores semanas en su carrera profesional.</p>
                                <p>Victoria Iglesias no pudo lograr el campeonato pero junto a su pareja Cata Tenorio ha demostrado tener una proyección enorme y ser la sensación del torneo según aficionados y expertos del pádel. Tras su gran actuación Cata y Victoria se cuelgan el cartel de favoritas para el resto de torneos.</p>
                                <p>Por su parte Paquito Navarro ha logrado junto a su pareja Mati Díaz mostrar su candidatura para conquistar el trono que hoy por hoy no tiene corona. El sevillano demostró un juego muy sólido y contundente derrotando junto a su pareja a grandes favoritos del torneo. Paquito volvió a conquistar con los aficionados de Barcelona y su personalidad social y motivadora junto a su gran juego le llevó a coronarse como el mejor jugador del torneo.</p>
                                <p>Sin duda alguna ha sido una semana importante para el pádel español y más en concreto para el pádel sevillano.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="noticia-all">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Más noticias</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Aquí se muestran las noticias más recientes. Puede ver noticias anteriores en la web oficial de <a target="_blank" href="http://www.worldpadeltour.com/noticias/">World Padel Tour</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    <section id="noticias02" class="services noticias">
        <div class="col-lg-12 text-center" style="float: none;">
            <a href="#" data-toggle="modal" data-target="#noticia-all" class="btn btn-lg btn-light" style="color: #0247d0">Ver más noticias</a>
        </div>
    </section>

    <!-- Twitter -->
    <section id="tweets" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Twitter</h2>
                    <hr class="small hr_black">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <a class="twitter-timeline" href="https://twitter.com/AKQJ1Oscar/lists/p-del" data-widget-id="584321976044494848" height="520px" data-show-replies="false" data-link-color="#0247d0" data-chrome="noheader noborders noscrollbar">Tweets de https://twitter.com/AKQJ1Oscar/lists/p-del</a>
            </div>
            <div class="col-md-6 col-sm-6">
                <a class="twitter-timeline" href="https://twitter.com/AKQJ1Oscar/lists/padel2" data-widget-id="584408571133190144" height="520px" data-show-replies="false" data-link-color="#0247d0" data-chrome="noheader noborders noscrollbar">Tweets de https://twitter.com/AKQJ1Oscar/lists/padel2</a>
            </div>
        </div>
    </section>

    <!-- Curiosidades -->
    <section id="curiosidades" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-bottom: 14px;">
                    <h2>Curiosidades</h2>
                    <hr class="small hr_black">
                </div>
                <div class="row hidden-xs" style="margin-bottom: 30px;">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-1">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/saque-a-la-vasca.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-1" style="color: black;">El saque a la vasca, nueva forma de sacar</a></h3>
                                <p class="lead">Existen varios tipos de saques que nos podemos encontrar en el pádel. Los dos principales son el saque clásico y el saque a la australiana. Ahora desde tierras vascas nos llega...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-1" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-2">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/diferencias.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-2" style="color: black;">Diferencias entre pelotas de tenis y pádel</a></h3>
                                <p class="lead">Al iniciarnos en el pádel nos damos cuenta de que hay diferencias con el tenis. Pero a simple vista, y no tan a simple vista, las pelotas de pádel y tenis nos parecen idénticas...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-2" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row hidden-xs">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-3">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/frases-padel.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-3" style="color: black;">Frases típicas del pádel</a></h3>
                                <p class="lead">Como todo en la vida, el pádel tiene su propia jerga, que sacada de contexto o en oídos de profanos, puede resultar incomprensible. Seguro que a vosotros os resulta familiar...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-3" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-4">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/palas-calor.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-4" style="color: black;">El calor, enemigo de la pala de pádel</a></h3>
                                <p class="lead">Los cambios de temperatura y el calor intenso alteran las propiedades de las palas de pádel. Por eso, desde la marca española Star Vie, nos dan todos los consejos que...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-4" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row hidden-sm hidden-md hidden-lg" style="margin-bottom: 30px; margin-left: 1px;">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-1">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/saque-a-la-vasca.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-1" style="color: black;">El saque a la vasca, nueva forma de sacar</a></h3>
                                <p class="lead">Existen varios tipos de saques que nos podemos encontrar en el pádel. Los dos principales son el saque clásico y el saque a la australiana. Ahora desde tierras vascas nos llega...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-1" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-2">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/diferencias.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-2" style="color: black;">Diferencias entre pelotas de tenis y pádel</a></h3>
                                <p class="lead">Al iniciarnos en el pádel nos damos cuenta de que hay diferencias con el tenis. Pero a simple vista, y no tan a simple vista, las pelotas de pádel y tenis nos parecen idénticas...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-2" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row hidden-sm hidden-md hidden-lg" style="margin-left: 1px;">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-3">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/frases-padel.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-3" style="color: black;">Frases típicas del pádel</a></h3>
                                <p class="lead">Como todo en la vida, el pádel tiene su propia jerga, que sacada de contexto o en oídos de profanos, puede resultar incomprensible. Seguro que a vosotros os resulta familiar...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-3" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#curiosidades-4">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/palas-calor.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#curiosidades-4" style="color: black;">El calor, enemigo de la pala de pádel</a></h3>
                                <p class="lead">Los cambios de temperatura y el calor intenso alteran las propiedades de las palas de pádel. Por eso, desde la marca española Star Vie, nos dan todos los consejos que...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#curiosidades-4" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Modals -->
        <div class="modal fade" id="curiosidades-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">El saque a la vasca, nueva forma de sacar en pádel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Existen dos tipos de saques en el pádel. El saque a la australiana y saque clásico. Como resumen la principial diferencia entre un tipo de saque y otro era la posición que defenderá cada jugador de la pareja que realice el servicio. Con el saque a la australiana cada jugador se encargará de defender SIEMPRE su lado, mientras que en el saque clásico cada jugador de la pareja que saca tendrá que defender ambas posiciones (la de derecha y de revés).</p>
                                <p>Desde tierras vascas nos llega una nueva formación para el saque en el pádel que resulta ser bastante innovadora. Lejos de ser un simple invento esta nueva forma de saque ha sido desarrollada e implementada por el equipo técnico del club de pádel Padeleku llegando a ser verificada su utilidad por la selección española subcampeona del mundo en Mallorca 2014.</p>
                                <p>VENTAJAS E INCONVENIENTES</p>
                                <p> - Necesitas mucha coordinación con tu compañero…una mala puesta en práctica puede hacer que el jugador en la red se lleve un pelotazo o que te ganen el punto de manera sencilla.</p>
                                <p> - Si se lleva a cabo de manera coordinada puede resultar un factor sorpresa para los oponentes. Como vemos en el vídeo el jugador en la red manda indicaciones al jugador que saca. Será clave la sincronización entre ambos jugadores.</p>
                                <p> - Esta técnica puede romper en un determinado momento la monotonía en un partido donde las parejas se conocen muy bien.</p>
                                <p>Esta nueva forma de saque puede ser interesante si la pareja que lo realiza lo tiene bien ensayado. De todas formas debería de llevarse a cabo de manera puntual en ciertos momentos de un partido buscando el factor sorpresa. Si nos fijamos en el hermano mayor del pádel, el tenis, podemos ver como en dobles esta técnica es usada en determinados momentos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="curiosidades-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Diferencias entre pelotas de tenis y pádel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Cuando nos iniciamos en el mundo del pádel nos damos cuenta de que hay diferencias con el tenis. Primero nos metemos en una pista bastante más pequeña que una de tenis y vemos que estamos rodeados de muro o cristal. Cogemos la pala y vemos que en lugar de tener cuerdas tiene agujeros, además de su tamaño es menor y el material es distinto. Pero una vez que vemos las pelotas no apreciamos a simple vista ninguna diferencia. De hecho, cuando llevamos un tiempo jugando al pádel llegamos a pensar que el hecho de que saquen pelotas de pádel es una estratagema de marketing para sacar más dinero. Sin embargo si que existen diferencias entre pelotas de tenis y de pádel.</p>
                                <p>1. Las medidas y el peso pueden ser distintas:</p>
                                <p> - Con respecto el diámetro de una pelota de tenis, este debe ser mayor de 6,35cm y menor de 6,67cm mientras que la pelota de pádel, a pesar de tener que ser también mayor de 6,35cm y menor de 6,77cm.</p>
                                <p> - En cuanto al peso, la pelota de tenis debe pesar entre 56,7 y 58,5 gramos y la de pádel entre 56 y 59,5 gramos.</p>
                                <p>2.  La presión que tienen las pelotas es diferente.</p>
                                <p>La presión en las pelotas de pádel es menor, lo que provoca que el juego sea algo más lento. En concreto, la pelota de pádel debe tener una presión interna entre 4,6kg y 5,2kg por cada 2,54cm cuadrados. En tenis, las pelotas tienen que someterse a una carga de 8,165kg.</p>
                                <p>3. La pelota de pádel tiene más rebote que la de tenis.</p>
                                <p>La pelota de tenis tiene que tener un rebote comprendido entre 135cm y 145cm al dejarla caer sobre una superficie dura desde una altura determinada de 2,54m, mientras que en pádel el rebote debe estar comprendido entre 135cm y 147cm. No obstante hay que tener presente la particularidad de que el tenis, al jugarse en todo el mundo, puede varias la presión dependiendo de la altitud del lugar donde se vaya a jugar.</p>
                                <p>4. En pádel nos podemos encontrar pelotas como las Wilson Tour con un tono más anaranjado. A pesar de ello, en torneos pueden prohibir usar este tipo de pelotas ya que el reglamento indica que sólo se deben usar pelotas amarillas y blancas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="curiosidades-3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Frases típicas del pádel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Como todo en la vida, el pádel tiene su propia jerga. Un lenguaje que sacado de contexto o en oídos de profanos, puede resultar incomprensible. Seguro que a vosotros os resulta muy familiar. Os dejamos la primera entrega de la serie.</p>
                                 <h3>“Un par arriba y ya estoy”</h3>
                                <p>Empezamos con el momento peloteo. Después de calentar y practicar los diferentes golpes, todos acabamos pidiendo que nos tiren un par de globos para practicar el smash y la bandeja con esta típica frase. Ese par de bolas acaban siendo unas cuantas más, dependiendo del rival.</p>
                                <h3>“Un poco más alta, por favor”, “un poco más a la derecha”, “para pegar”…</h3>
                                <p>Son correcciones que te va haciendo el contrario conforme le vas tirando ese “par” de bolas altas para practicar. Lo de gustarse en el smash y bandeja en el calentamiento es un clásico.</p>
                                <h3>“Vamos, que se puede”</h3>
                                <p>Acaba el peloteo y hay que empezar lo serio. Nada mejor que animar a tu compañero para que empiece con confianza. Ese “que se puede”, aunque suene motivador, añade a la frase que has visto que los rivales son fuertes y la cosa va a estar complicada.</p>
                                <h3>“Buen partido, chicos”</h3>
                                <p>Vas a sacar y para relajar y empatizar con los rivales les deseas un buen partido, aunque por dentro estés deseando que no metan una. Si hay confianza con la pareja rival, es el momento de jugarse las cañas, la cena, o las dos cosas.</p>
                                <h3>“¡Mía!”</h3>
                                <p>Ya estamos dentro del partido. Una de las palabras que más se escucha es este característico “mía”. Pronombre posesivo, primera persona del singular que desencadena en varias situaciones, según su pronunciación:</p>
                                <ul>
                                    <li>Cuando se pronuncia con voz firme, decidida y con convicción. Le quitas la bola a tu compañero, pero porque lo has visto muy claro. La acabas sacando con un mate por tres o por cuatro. &nbsp;Bien hecho, crack.</li>
                                    <li>Cuando se pronuncia con voz atribulada, dubitativa, apoderado por el ansia. La bola no es tan clara, pero te lanzas y se la quitas a tu compañero. Esta acaba en la pista de al lado o va directa al cristal del fondo en el mejor de los casos.</li>
                                    <li>La tercera opción es cuando se oyen dos “mías” a la vez. Suele acabar de la peor de las maneras. Choque de trenes en la red, posible rotura de palas por la colisión y punto…de sutura en la ceja!</li>
                                </ul>
                                <h3>“¡Tuya!”</h3>
                                <p>Seguimos con los pronombres posesivos, aunque cambiamos de persona. También con dos diferentes significados y consecuencias según la manera de decirlo:</p>
                                <ul>
                                    <li>Si lo decimos con voz clara, anticipándonos a la jugada y con convencimiento. Esto implica confianza ciega en tu compañero, ves que es suya y tienes fe en él para devolver esa pelota.</li>
                                    <li>La cosa cambia si nos dirigimos a nuestro compañero con un hilo de voz, con tono casi de súplica y buscando el milagro. Hemos querido llegar, pero no hemos podido. La bola ya ha pasado, y buscamos en nuestra pareja la reacción que nosotros no hemos tenido, pasándole el marrón de una manera muy sútil. Difícil que salga bien…</li>
                                </ul>
                                <h3>“Suben los dos…muy pegados”</h3>
                                <p>Uno de los recursos más utilizados es el globo y conforme pasan a nuestro compañero, queremos ayudarle diciéndole qué hacen nuestros rivales. Casi siempre suben los dos y los ves muy cerca, así que recurres al típico “muy pegados”, esperando que tu compañero haga un globo perfecto y te devuelva la vida en el punto.</p>
                                <h3>“¡Estas bolas no salen!”</h3>
                                <p>El pádel es posiblemente el deporte donde más excusas se pueden buscar, y además se encuentran! Hay que echar la culpa a lo que sea antes de reconocer nuestro error. Después de fallar dos o tres mates claros para sacarla y que se te queden a media pista, lo más creíble y lo más utilizado es echar la culpa al desgaste y a la poca salida de las bolas.</p>
                                <h3>“Juega con margen”</h3>
                                <p>Te lo suele decir tu compañero en momento crítico. Llevas unos juegos que estás fallando como una escopeta de feria y es la manera más suave de decirte que hagas el favor de meter una bola dentro de la pista.</p>
                                <h3>“Punto a punto”</h3>
                                <p>Vas 0-40. Estás sacando que da cosica verte y el compañero te empuja para que no pierdas la concentración. Es el último intento de meterte en el juego. Complicado que funcione, pero hay que intentarlo</p>
                                <h3>“No nos desconcentramos, eh?”</h3>
                                <p>Acabas de ganar el primer set, te ves superior y estás ante el momento crítico de empezar el segundo. En el pádel hay que evitar desconexiones ya que la tortilla se da la vuelta muy rápido, y es en este momento cuando viene bien prevenirlas. No te relajes!</p>
                                <h3>“¡Este hay que romperlo! ¡Este es!”</h3>
                                <p>El partido está igualado. No ha habido breaks y el set va avanzando parejo. En anteriores juegos has visto una pequeña debilidad en el saque de uno de tus rivales, y es el que se dispone a sacar. Esta frase se suele pronunciar alta para que te oiga tu pareja y para intentar minar la confianza del sacador. Meter presión es una de las partes más divertida del juego.</p>
                                <h3>“¡Qué suerte tienen!”</h3>
                                <p>Te están pegando un baile. No sabes ni por dónde te vienen y además tienes la percepción de que la toquen como la toquen, la bola les va a entrar. Hay que descargar culpas y frustación, y aquí la suerte cumple el papel de culpable a la perfección. Recordad lo comentado antes. En pádel, cualquier cosa vale antes de reconocer nuestra inferioridad.</p>
                                <h3>“¡Perdón!! “Lo siento”</h3>
                                <p>O cualquier tipo de disculpa. Todas más falsas que una pala de plástico. Sueles emplearla cuando la bola toca la cinta y entra o después de un bolazo al cuerpo. En ambos casos, te puede la alegría por conseguir el punto, pero pides disculpas por quedar bien. Hay que gastar un poco de educación, que para algo nos la han dado.</p>
                                <h3>“Vamos a cargar al malo”.</h3>
                                <p>Utilizada cuando estás jugando con una pareja que ves que está descompensada y a la que no hay manera de meter mano. El famoso “neverazo” toma cuerpo, e intentas castigar al bueno sin que toque una. Si te sale bien, te vas a casa pensando que eres un genio de la táctica. Si sale mal, y te gana un filete, te deja muy tocado mentalmente.</p>
                                <h3>“Cortooo…¡¡saaaal!!!”</h3>
                                <p>Suele ir todo junto. En pádel tienes poco tiempo para hablar, así que hay que economizar palabras. Frase empleada para decir que se te queda el globo cortísimo y que se la has puesto “a huevo” al rival. Intentas avisar a tu pareja para que salga corriendo a devolver el mate e intente arreglar el destrozo que has provocado.</p>
                                <h3>“¡¡Llegas!!”</h3>
                                <p>Frase motivante, directa, que intenta animar a tu compañero ante un pedazo de golpe del rival. No hay que dar una bola por perdida aunque con ello te juegues la integridad física de tu pareja.</p>
                                <h3>“A la primera, eh?”</h3>
                                <p>Con el uso del “¿eh?” buscas la respuesta de tu compañero. Que te diga que sí. Que tienes razón, que va a ser así. Interjección muy utilizada en pádel. Pero a lo que vamos, esta frase es muy utilizada cuando tienes varias bolas de algo. De break, de set o de partido. Llega el momento de definir y hay que estar con la confianza de hacerlo cuanto antes.</p>
                                <h3>“Bien jugado chicos. Ha estado divertido”</h3>
                                <p>El partido acaba y es el momento de darse la mano y de pasar al post partido. Perfecto si acaba en el bar del club y cumple con el “cometido” social del pádel. Los ganadores, contentos suelen felicitar y tratar de animar a sus rivales con la mencionada frase. Para los perdedores, por el contrario, es el momento de buscar causas y razones a su derrota.</p>
                                <h3>“Me han hecho la nevera”</h3>
                                <p>Buscando razones de por qué se ha perdido, el que se cree mejor de la pareja, suele encontrarlas en que no ha tocado bola. Ha sido objeto de la famosa nevera padelera y no ha podido entrar en el partido. Es una bonita forma de depurar responsabilidades y cargar el muerto al compañero.</p>
                                <h3>“Les pillamos en cristal y nos los fundimos”</h3>
                                <p>Excusa muy utilizada por jugadores “aburguesados”, acostumbrados a jugar en indoor, con las condiciones neutras que ello implica. Se les saca fuera, con un poco de viento y paredes de cemento y no encuentran su sitio. El que juega bien, lo hace bien en cualquier sitio, pero el pensar que las condiciones de pista y clima son importantes, vienen bien para el tocado ego del padelista.</p>
                                <h3>“Hemos perdido por detalles”</h3>
                                <p>Esta es probablemente la excusa con más razón de todas las empleadas por la pareja derrotada. Partido muy igualado que suele decidirse por la mayor consistencia de la pareja ganadora en los puntos clave. Autocrítica constructiva y bien encaminada. La solución, fallar menos y ser aún más sólido.</p>
                                <h3>“Mi compañero ha estado horrible”</h3>
                                <p>Tu compañero ya se ha ido. Te quedas comentando la jugada con la pareja rival y qué mejor que hablar de la debilidad de tu compañero, de su poca velocidad de bola, o de cómo te deja vendido sin que tú puedas hacer nada. Ellos asienten y te dan la razón, qué van a hacer… Te vas a casa convencido de que habiendo jugado con Lamperti, habrías ganado.</p>
                                <h3>“Esto son días”</h3>
                                <p>Has jugado mal, y lo sabes. Te han pegado un repaso y no tienes posibilidad creíble de echar la culpa a otra cosa. Recurres al típico “esto son días” y te liberas del sentimiento de ser un paquete. Hay días que crees que has jugado bien y te aferras a recordarlo. La recurrencia al “feeling” da mucho juego. Las sensaciones como motor de tu juego.</p>
                                <h3>“Hace mucho que no jugaba…”</h3>
                                <p>Has estado fuera del partido. No encontrabas ritmo, mal colocado en la pista y sin posibilidades de victoria. La semana que has estado sin jugar te ha pasado factura! A pesar de que también suena a justificación, es verdad que, como en todo, cuanto más se juega, mejor se hace.</p>
                                <h3>“Me dolía el codo”</h3>
                                <p>Podemos sustituir codo por hombro, muñeca, rodilla o cualquier articulación o músculo de nuestro cuerpo y ya tenemos la causa de la derrota y de nuestro bajo rendimiento. Si el pádel no existiera, lo habrían tenido que inventar los fisioterapeutas, porque se están haciendo de oro. Además, es llamativa la facilidad con la que jugamos a pesar de los dolores varios, para los que las victorias son más efectivas que cualquier antiinflamatorio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="curiosidades-4">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">El calor, enemigo de la pala de pádel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Con la llegada del verano y las altas temperaturas, el calor se convierte en uno de los grandes enemigos de la pala de pádel. Sin embargo, muchas veces se suele guardar la pala en el maletero del coche para que esté siempre a mano, sin ser conscientes de los perjuicios que esto conlleva. De hecho, durante los días de calor de la época estival, el maletero puede llegar a alcanzar los 60ºC, una temperatura intensa que altera las propiedades mecánicas de la pala.</p>
                                <p>Alberto Mancho, director de la fábrica de Star Vie, marca de pádel 100% española con producción propia en Guadalajara, recomienda no someter a la pala a las temperaturas que suele alcanzar el interior del maletero de un coche expuesto al sol. Los materiales con los que se fabrican las palas de pádel se comportan de forma diferente al alcanzar temperaturas superiores a 45ºC. </p>
                                <p>Los fabricantes de goma EVA ofrecen productos que a partir de los 50ºC pierden las propiedades mecánicas de capacidad de rebote, resistencia, dureza, etc. para las que fueron diseñadas. En general, los materiales con los que se fabrica una pala se alteran con las altas temperaturas haciendo que se vuelva más blanda, menos precisa y con menos potencia. Pero sobre todo, afecta a que disminuye su resistencia ante las roturas.</p>
                                <p>Alberto Mancho aconseja a los jugadores seguir unas normas sencillas para asegurar la durabilidad y prestaciones de una buena pala de pádel:</p>
                                <p> - No abandonar la pala en el maletero si el coche va a estar sometido a altas temperaturas o expuesto al sol durante horas.</p>
                                <p> - No dejar la pala en el salpicadero o en la bandeja trasera bajo los cristales ya que éstos actúan como lupa. Intentar guardar siempre la pala en su funda, mochila o paletero.</p>
                                <p> - Guardar la pala a casa en un lugar seco y aireado.</p>
                                <p> - Evitar dejarlas encimas de radiadores.</p>
                                <p>Teniendo en cuenta estos sencillos consejos se puede prolongar la vida de la pala de pádel durante los meses de más calor, para así conservarla en las mejores condiciones posibles y que el juego no se vea afectado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Historia -->
    <section id="historia" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Historia del pádel</h2>
                    <hr class="small hr_black">
                    <p class="lead">
                        El pádel surge en 1969 en Acapulco, México, cuando un contratista llamado Enrique Corcuera incorpora, a un frontón de su casa en Las Brisas, una pared opuesta al mismo de unos tres metros de altura, colocando una red en el medio y cerrando los costados con más pared y malla metálica, quedando un terreno de juego de unos 20 x 10 metros. Corcuera acaba de crear la primera pista de pádel.
                    </p>
                    <div class="col-xs-6 col-sm-6 col-md-4 hidden-xs" style="margin-right: -50px; padding-right: 50px;">
                        <div class="thumbnail" style="border: 0; padding: 9px;">
                            <img style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8);" src="img/corcuera.jpg">
                            <div class="caption" style="padding: 0;">
                                <h3 style="padding-right: 5px;">Enrique Corcuera</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 hidden-sm hidden-md hidden-lg">
                        <div class="thumbnail" style="border: 0; padding: 0;">
                            <img style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8);" src="img/corcuera.jpg">
                            <div class="caption" style="padding: 0;">
                                <h3 style="padding-right: 5px;">Enrique Corcuera</h3>
                            </div>
                        </div>
                    </div>
                    <p class="lead">
                        En 1974, el Príncipe Alfonso de Hohenlohe-Langenburg (Madrid, 28 de mayo de 1924 - Marbella, 21 de diciembre de 2003) viaja a México invitado por su amigo Enrique Corcuera. Allí se interesa por el nuevo deporte que recientemente había creado Corcuera, el cual se jugaba con palas hechas de madera. Su entusiasmo por esta nueva modalidad deportiva no se hizo esperar, ya que Alfonso Hohenlohe a su regreso a España, tras perfeccionar algunos detalles de la pista y de las reglas de juego, construye en Marbella, en el Hotel Marbella Club, de su propiedad, las dos primeras pistas de pádel de España.
                    </p>
                    <p class="lead">
                        El éxito que obtuvo en poco tiempo este deporte atrajo a figuras destacadas del tenis como Manolo Santana, que comenzó a organizar torneos y propagar el pádel en toda la Costa del Sol, donde varios clubes empezaron a construir sus propias pistas.
                    </p>
                    <p class="lead">
                        En 1975, un gran amigo de Alfonso de Hohenlohe, y asiduo visitante de Marbella, el millonario argentino Julio Menditengui es testigo del éxito de pádel, y decide importar el deporte a Argentina, donde en pocos años obtuvo un auge sin precedentes convirtiéndose hoy en día en el segundo deporte más practicado en este país, con más de 2 millones de jugadores y 10000 pistas construidas en todo el territorio.
                    </p>
                    <p class="lead">
                        En España, el pádel comienza a expandirse a las grandes ciudades y clubes deportivos de Madrid, Barcelona, Andalucía, Galicia y País Vasco. En Madrid el Club Puerta de Hierro construyó sus primeras canchas, y algunos años después, La Moraleja, con 5 canchas de pádel se convierte en un centro de juego de muy buen nivel. Se crea entonces la infraestructura necesaria para organizar la práctica del pádel por todo el país y el Circuito Nacional de Torneos que se desarrollará en los clubes más prestigiosos de España. El pádel siguió creciendo gracias a la Federación y a la retransmisión por televisión de algunos torneos (pocos y en autonómicas).
                    </p>
                    <div class="col-sm-6 col-md-5" style="float: right; padding-top: 25px;">
                        <div class="thumbnail" style="border: 0; padding: 0;">
                            <img style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8);" src="img/cancha.jpg">
                            <div class="caption" style="padding: 0;">
                                <h3 style="padding-right: 5px;">Pista creada por Corcuera</h3>
                            </div>
                        </div>
                    </div>
                    <p class="lead">
                        Al hablar de la difusión del pádel en España, no podemos olvidarnos del gran impulso que recibió durante los años 90 al contar entre sus aficionados con destacadas figuras del ámbito político, empresarial y periodístico español, que facilitaron que el pádel se convirtiera en un deporte de moda. Entre estas figuras podemos destacar al ex-presidente del Gobierno,  José María Aznar, que al trasladarse a vivir al Palacio de la Moncloa hizo construir en sus instalaciones una pista de pádel.
                    </p>
                    <p class="lead">
                        El 25 de julio de 1991, se constituye en Madrid la Federación Internacional de pádel cuya presidencia recae en un español, Julio Alegría Artiach, que se encargó de crear un circuito de encuentros internacionales y de concretar un reglamento oficial de juego internacional.
                    </p>
                    <p class="lead">
                        En mayo de 1993, el pádel dio un paso decisivo para su consolidación: el Consejo Superior de Deportes acordó el reconocimiento del pádel como modalidad deportiva. Un año después, se aprueba la constitución de la Agrupación Española de pádel inscrita en el Registro de Agrupaciones Deportivas del Consejo Superior de Deportes.
                    </p>
                    <p class="lead">
                        A nivel regional, se funda en enero de 1992 la Agrupación Madrileña de Pádel, hoy en día inscrita en el Registro de Asociaciones Deportivas de la Comunidad de Madrid de la Dirección General de Deportes. No es ésta la única comunidad autonómica donde han surgido iniciativas de este tipo; en Cataluña, País Vasco, Galicia, Andalucía y Extremadura existen Agrupaciones Territoriales.
                    </p>
                    <p class="lead">
                        En 1992, en las instalaciones del Club de Golf de La Moraleja en Madrid y en la Exposición Universal de Sevilla se desarrolló el I Campeonato del Mundo de Pádel, con la participación de delegaciones de 11 países de América y Europa. En la fase inicial presidida por el Príncipe de Asturias se clasificaron con facilidad Argentina y España para la fase final celebrada en Sevilla, donde por primera vez en España se instaló una pista de cristal desmontable. Se cumplieron los pronósticos y Argentina se proclamó campeona del mundo tanto en categoría masculina como femenina venciendo a España por un rotundo 3-0 (tres partidos a 0). En tercera posición quedó Uruguay.
                    </p>
                    <p class="lead">
                        La ciudad de Mendoza en Argentina albergó del 23 al 30 de Octubre de 1994 el II Campeonato del Mundo de Pádel, que se jugó en las afueras de la ciudad, en el Hotel Ejército de los Andes, con dos pistasde cemento, una de cristal con superficie de césped sintético y otra, en un estadio cubierto ("la burbuja") de cristal con superficie de supreme court. En cuanto al resultado, se repitió el podium del primer mundial, reafirmándose Argentina como dominadora del pádel y España como subcampeona.
                    </p>
                    <p class="lead">
                        En 1996, España volvió a ser sede albergando el III Campeonato del Mundo de Pádel, que se celebró en las Instalaciones del Club de Campo Villa de Madrid y en el que se batió récord de participación de países. Los resultados de este mundial se repitieron miméticamente respecto a la anterior edición: victoria de Argentina sobre España (3/0 otra vez), siendo esta vez Brasil tercero, Uruguay cuarto y México quinto.
                    </p>
                    <p class="lead">
                        Del 19 al 25 de Octubre de 1998 se llevó a cabo el IV Campeonato del Mundo de Pádel, esta vez en la ciudad argentina de Mar del Plata, en el Ocean club (primer club social de Argentina en tener canchas o pistas de pádel). Las instalaciones constaban de 4 pistas a las cuales se le agregó una más de cristal con tribunas con capacidad para 2000 personas. La subsede fue el club La Manzana, con cuatro pistas más de cemento. Los países participantes fueron Argentina, Bélgica, Brasil, Canadá, Chile, España, Estados Unidos, Francia, Italia, México y Uruguay. En esta ocasión el primer puesto se lo llevó España, por primera vez, venciendo en la clásica final a su histórico adversario: Argentina.
                    </p>
                    <p class="lead">
                        El V Campeonato del Mundo de Pádel tuvo lugar a partir del 26 de Junio de 2000 en la ciudad de Toulouse, Francia. Participaron Bélgica, Chile, España, Francia, Estados Unidos, México, Argentina, Brasil, Canadá, Uruguay e Italia. En esta edición el equipo argentino recuperó en la categoría masculina el título que acostumbraba derrotando a sus pares españoles en la final. En cuanto a la caegoría femenina, las españolas derrotaron en la final al equipo argentino con una contundencia que se vio reflejada en el 3-0 final. El mundial por equipos culminó de la siguiente forma. En hombres: 1º Argentina, 2º España, 3º Brasil, 4º Uruguay, 5º México, 6º Chile, 7º Francia, 8º Italia, 9º Estados Unidos, 10º Francia. En mujeres: 1º España, 2º Argentina, 3º Brasil, 4º Uruguay, 5º México, 6º Italia, 7º Chile, 8º Francia. En cuanto al Open por Parejas los Campeones fueron Díaz-Auguste, de Argentina (este último fue elegido el mejor jugador del torneo), ganando en la final a la pareja conformada por Reca-Nerone, también argentinos.
                    </p>
                    <div class="col-md-6 hidden-xs hidden-sm" style="float: left; margin: 10px -75px 0 0; padding-right: 75px;">
                        <div style="position: relative;">
                            <iframe width="400" height="255" src="https://www.youtube.com/embed/YQ9Mh8AGysg?rel=0&amp;theme=light&amp;color=white;showinfo=0" frameborder="0" allowfullscreen style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-5 hidden-md hidden-lg" style="float: left;">
                        <div style="position: relative;">
                            <iframe width="240" height="132" src="https://www.youtube.com/embed/YQ9Mh8AGysg?rel=0&amp;theme=light&amp;color=white;showinfo=0" frameborder="0" allowfullscreen style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8);"></iframe>
                        </div>
                    </div>
                    <p class="lead">
                        Desde 1993 se celebran en España los Campeonatos Internacionales en las instalaciones del Club de Campo Villa de Madrid, con la presencia de los mejores jugadores del mundo. Este torneo se ha convertido en el más importante a nivel internacional, tanto por su calidad como por la cuantía de los premios.
                    </p>
                    <p class="lead">
                        En 1995, el pádel fue incorporado como deporte de exhibición en la XII edición de los Juegos Panamericanos, que tuvieron lugar en la ciudad de Mar del Plata, Argentina, con la participación record de 42 naciones. Esto fue un gran escaparate para el pádel.
                    </p>
                    <p class="lead">
                        En la actualidad, el circuito profesional de pádel se ha llamado durante 7 años Padel Pro Tour, hasta el año 2013 cuando los jugadores firmaron contrato con los nuevos organizadores, World Padel Tour, pasando a ser este el nuevo circuito profesional de pádel.
                    </p>
                    <p class="lead">
                        En los últimos años el pádel se ha extendido a otros países como Brasil, Uruguay, Chile, Paraguay, etc. con numerosos aficionados. Esta influencia ha llegado también a América del Norte donde ya se pueden contar aficionados entre los estadounidenses y canadienses, y en Europa se está extendiendo por diferentes países europeos, donde ya se han formado sus respectivas federaciones, que están obteniendo un gran éxito en cuanto al número de federados y construcción de instalaciones; Francia, Italia, Bélgica, Gran Bretaña y Austria. España, en este sentido, tiene un importante papel como impulsora del pádel en Europa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ranking -->
    <section id="ranking" class="services">
        <div class="container" style="margin-top: 30px; margin-bottom: 25px;">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12">
                    <h2>Ranking World Padel Tour</h2>
                    <hr class="small hr_white">
                    <div class="separador"><span>Masculino</span></div>
                    <div class="row" style="text-align: left;">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/1-fbela.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">1</div>
                                            <div class="nombre">Fernando Belasteguín</div>
                                            <div class="puntos">12.007<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/AR.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/2-jmd.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">2</div>
                                            <div class="nombre">Juan Martín Díaz</div>
                                            <div class="puntos">9.637<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/3-lima.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">3</div>
                                            <div class="nombre">Pablo Lima</div>
                                            <div class="puntos">7.013<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/BR.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/5-paco.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">4</div>
                                            <div class="nombre">Francisco Navarro</div>
                                            <div class="puntos">6.722<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align: left; margin-top: 45px;">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/4-juan.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">5</div>
                                            <div class="nombre">Juani Mieres Petruf</div>
                                            <div class="puntos">6.643<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/6-mati.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">6</div>
                                            <div class="nombre">Matías Díaz Sangiorgio</div>
                                            <div class="puntos">6.429<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/7-cdg.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">7</div>
                                            <div class="nombre">Carlos Daniel Gutiérrez</div>
                                            <div class="puntos">5.624<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/AR.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/7-maxi.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">7</div>
                                            <div class="nombre">Maxi Sánchez</div>
                                            <div class="puntos">5.624<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/AR.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center" style="float: none;">
                        <a href="#" data-toggle="modal" data-target="#rankmasc" class="btn btn-lg btn-light hidden-xs" style="color: #0247d0; margin-bottom: 25px;">Ver ranking masculino completo</a>
                        <a href="#" data-toggle="modal" data-target="#rankmasc" class="btn btn-lg btn-light hidden-sm hidden-md hidden-lg" style="color: #0247d0; margin-bottom: 25px; font-size: 15px;">Ver ranking masculino completo</a>
                    </div>
                    <div class="separador" style="margin-top: 25px"><span>Femenino</span></div>
                    <div class="row" style="text-align: left;">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/1-mpsa.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">1</div>
                                            <div class="nombre" style="padding: 5px 0;">M.Pilar Sánchez Alayeto</div>
                                            <div class="puntos">8.303<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/1-mjsa.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">1</div>
                                            <div class="nombre" style="padding: 5px 0;">M.José Sánchez Alayeto</div>
                                            <div class="puntos">8.303<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/3-ale.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">3</div>
                                            <div class="nombre">Alejandra Salazar</div>
                                            <div class="puntos">7.560<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/7-marta.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">4</div>
                                            <div class="nombre">Marta Marrero</div>
                                            <div class="puntos">6.427<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align: left; margin-top: 45px;">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/5-pati.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">5</div>
                                            <div class="nombre">Patricia Llaguno</div>
                                            <div class="puntos">6.406<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/5-eli.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">5</div>
                                            <div class="nombre">Elisabeth Amatriain</div>
                                            <div class="puntos">6.406<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/4-iciar.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">7</div>
                                            <div class="nombre">Icíar Montes Arce</div>
                                            <div class="puntos">5.600<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/ES.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <a>
                                    <div class="ficha-jugador" style="margin: 0 auto;">
                                        <div class="foto">
                                            <img class="img-portfolio img-responsive" src="img/8-cata.jpg">
                                        </div>
                                        <div class="datos-jugador">
                                            <div class="posicion">8</div>
                                            <div class="nombre">Catalina Tenorio</div>
                                            <div class="puntos">5.046<span>pts</span></div>
                                            <div class="bandera">
                                                <img src="img/AR.png">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center" style="float: none;">
                        <a href="#" data-toggle="modal" data-target="#rankfem" class="btn btn-lg btn-light hidden-xs" style="color: #0247d0;">Ver ranking femenino completo</a>
                        <a href="#" data-toggle="modal" data-target="#rankfem" class="btn btn-lg btn-light hidden-sm hidden-md hidden-lg" style="color: #0247d0; font-size: 15px;">Ver ranking femenino completo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Modals -->
        <div class="modal fade" id="rankmasc">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Ranking masculino</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/1-fbela.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">1</div>
                                                <div class="nombre">Fernando Belasteguín</div>
                                                <div class="puntos">12.007<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/2-jmd.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">2</div>
                                                <div class="nombre">Juan Martín Díaz</div>
                                                <div class="puntos">9.637<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/3-lima.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">3</div>
                                                <div class="nombre">Pablo Lima</div>
                                                <div class="puntos">7.013<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/BR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/5-paco.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">4</div>
                                                <div class="nombre">Francisco Navarro</div>
                                                <div class="puntos">6.722<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/4-juan.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">5</div>
                                                <div class="nombre">Juani Mieres Petruf</div>
                                                <div class="puntos">6.643<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/6-mati.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">6</div>
                                                <div class="nombre">Matías Díaz Sangiorgio</div>
                                                <div class="puntos">6.429<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/7-cdg.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">7</div>
                                                <div class="nombre">Carlos Daniel Gutiérrez</div>
                                                <div class="puntos">5.624<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/7-maxi.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">7</div>
                                                <div class="nombre">Maxi Sánchez</div>
                                                <div class="puntos">5.624<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(1).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">9</div>
                                                <div class="nombre">Maxi Grabiel</div>
                                                <div class="puntos">3.868<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(2).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">10</div>
                                                <div class="nombre">Cristian Gutiérrez</div>
                                                <div class="puntos">3.829<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(3).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">11</div>
                                                <div class="nombre">Adrián Allemandi</div>
                                                <div class="puntos">3.680<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(4).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">12</div>
                                                <div class="nombre">Miguel Lamperti</div>
                                                <div class="puntos">3.405<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(13).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">13</div>
                                                <div class="nombre">Willy Lahoz</div>
                                                <div class="puntos">2.930<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(7).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">14</div>
                                                <div class="nombre">Aday Santana Ferrero</div>
                                                <div class="puntos">2.385<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(8).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">14</div>
                                                <div class="nombre">Jordi Muñoz Baixas</div>
                                                <div class="puntos">2.385<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(5).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">16</div>
                                                <div class="nombre">Seba Nerone</div>
                                                <div class="puntos">2.364<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(6).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">16</div>
                                                <div class="nombre">Gabriel Reca</div>
                                                <div class="puntos">2.364<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(21).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">18</div>
                                                <div class="nombre">David Gutiérrez</div>
                                                <div class="puntos">1.859<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(23).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">19</div>
                                                <div class="nombre">Luciano Capra</div>
                                                <div class="puntos">1.705<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(9).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">20</div>
                                                <div class="nombre">Federico Quiles</div>
                                                <div class="puntos">1.683<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(10).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">20</div>
                                                <div class="nombre">Agustín Gómez Silingo</div>
                                                <div class="puntos">1.683<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(14).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">22</div>
                                                <div class="nombre">Javier Concepción</div>
                                                <div class="puntos">1.425<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(15).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">22</div>
                                                <div class="nombre">Uri Botello Cohen</div>
                                                <div class="puntos">1.425<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(16).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">24</div>
                                                <div class="nombre">Matías Marina Artuso</div>
                                                <div class="puntos">1.373<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(17).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">25</div>
                                                <div class="nombre">Ramiro Moyano Toledo</div>
                                                <div class="puntos">1.333<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(18).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">26</div>
                                                <div class="nombre">Alejandro Ruiz</div>
                                                <div class="puntos">1.304<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(19).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">27</div>
                                                <div class="nombre">Gonzalo Díaz</div>
                                                <div class="puntos">1.295<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(20).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">28</div>
                                                <div class="nombre">Fernando Poggi</div>
                                                <div class="puntos">1.224<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(11).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">29</div>
                                                <div class="nombre">Francisco Gomes</div>
                                                <div class="puntos">1.202<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/BR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(12).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">30</div>
                                                <div class="nombre">Marcello Jardim</div>
                                                <div class="puntos">1.148<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/BR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(22).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">31</div>
                                                <div class="nombre">Javier Escalante</div>
                                                <div class="puntos">1.112<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankmasc%20(24).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">32</div>
                                                <div class="nombre">Juan Manuel Vázquez</div>
                                                <div class="puntos">1.070<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="rankfem">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Ranking femenino</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/1-mpsa.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">1</div>
                                                <div class="nombre" style="padding: 5px 0;">M.Pilar Sánchez Alayeto</div>
                                                <div class="puntos">8.303<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/1-mjsa.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">1</div>
                                                <div class="nombre" style="padding: 5px 0;">M.José Sánchez Alayeto</div>
                                                <div class="puntos">8.303<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/3-ale.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">3</div>
                                                <div class="nombre">Alejandra Salazar</div>
                                                <div class="puntos">7.560<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/7-marta.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">4</div>
                                                <div class="nombre">Marta Marrero</div>
                                                <div class="puntos">6.427<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/5-pati.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">5</div>
                                                <div class="nombre">Patricia Llaguno</div>
                                                <div class="puntos">6.406<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/5-eli.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">5</div>
                                                <div class="nombre">Elisabeth Amatriain</div>
                                                <div class="puntos">6.406<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/4-iciar.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">7</div>
                                                <div class="nombre">Icíar Montes Arce</div>
                                                <div class="puntos">5.600<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/8-cata.jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">8</div>
                                                <div class="nombre">Catalina Tenorio</div>
                                                <div class="puntos">5.046<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(1).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">9</div>
                                                <div class="nombre">Cecilia Reiter</div>
                                                <div class="puntos">4.020<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(2).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">10</div>
                                                <div class="nombre">Carolina Navarro</div>
                                                <div class="puntos">3.840<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(3).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">11</div>
                                                <div class="nombre">Lucía Sainz Pelegrí</div>
                                                <div class="puntos">3.107<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(4).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">11</div>
                                                <div class="nombre">Marta Ortega Gallego</div>
                                                <div class="puntos">3.107<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(6).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">13</div>
                                                <div class="nombre">Nelida Brito</div>
                                                <div class="puntos">2.365<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(7).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">14</div>
                                                <div class="nombre">Paula Eyheraguibel</div>
                                                <div class="puntos">2.263<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(5).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">15</div>
                                                <div class="nombre">Valeria Pavón</div>
                                                <div class="puntos">2.020<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(8).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">16</div>
                                                <div class="nombre">Gemma Triay Pons</div>
                                                <div class="puntos">1.920<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(23).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">17</div>
                                                <div class="nombre">Victoria Iglesias</div>
                                                <div class="puntos">1.574<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(9).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">18</div>
                                                <div class="nombre">Ana Catarina Nogueira</div>
                                                <div class="puntos">1.520<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/PT.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(10).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">19</div>
                                                <div class="nombre">María del Carmen Villalba</div>
                                                <div class="puntos">1.414<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(11).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">19</div>
                                                <div class="nombre">Alba Galán Romo</div>
                                                <div class="puntos">1.414<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(15).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">21</div>
                                                <div class="nombre">Lorena Alonso</div>
                                                <div class="puntos">1.379<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(12).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">22</div>
                                                <div class="nombre">Lucía Martínez</div>
                                                <div class="puntos">1.284<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(14).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">23</div>
                                                <div class="nombre">Alicia Lilian Berl</div>
                                                <div class="puntos">1.047<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(13).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">24</div>
                                                <div class="nombre">Isabel Domínguez</div>
                                                <div class="puntos">1.037<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(19).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">25</div>
                                                <div class="nombre">Ana Fernández de Osso</div>
                                                <div class="puntos">1.027<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(17).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">25</div>
                                                <div class="nombre">Sandra Hernández</div>
                                                <div class="puntos">1.027<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(16).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">25</div>
                                                <div class="nombre">Ana Laura Grandes</div>
                                                <div class="puntos">1.027<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(20).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">28</div>
                                                <div class="nombre">Celeste Paz</div>
                                                <div class="puntos">977<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/AR.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: left; margin-top: 45px;">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(22).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">29</div>
                                                <div class="nombre">Teresa Navarro</div>
                                                <div class="puntos">956<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(21).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">30</div>
                                                <div class="nombre">Nuria Rovira Noguer</div>
                                                <div class="puntos">906<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(18).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">31</div>
                                                <div class="nombre">Noelia Márquez</div>
                                                <div class="puntos">887<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <a>
                                        <div class="ficha-jugador" style="margin: 0 auto;">
                                            <div class="foto">
                                                <img class="img-portfolio img-responsive" src="img/rankfem%20(24).jpg">
                                            </div>
                                            <div class="datos-jugador">
                                                <div class="posicion">32</div>
                                                <div class="nombre">Clara Teresa Siverio</div>
                                                <div class="puntos">870<span>pts</span></div>
                                                <div class="bandera">
                                                    <img src="img/ES.png">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Torneos -->
    <section id="torneos" class="services torneos">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Torneos</h2>
                    <hr class="small hr_black">
                </div>
            </div>
        </div>
    </section>
    <div class="container ">
        <div class="row text-center">
            <!-- Swiper -->
            <style>
                .swiper-container {
                    width: 100%;
                    padding-top: 20px;
                    padding-bottom: 50px;
                    margin-bottom: 100px;
                }
                .swiper-slide {
                    background-position: center;
                    background-size: cover;
                    width: 300px;
                    height: 450px;
                }
            </style>
            <div class="swiper-container">
                <div class="swiper-wrapper" style="height: 450px;">
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/cartel_Barcelona_2015.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/cartel_SanFernando_2015.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/cartel_Valencia_2015.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/cartel_IslaDeLaPalma_2015.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss1.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss2.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss3.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss4.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss5.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss6.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss7.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss8.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss9.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss10.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss11.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss12.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss13.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss14.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss15.jpg)"></div>
                    <div class="swiper-slide" style="border-radius:5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); background-image:url(img/torneosss16.jpg)"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- Map -->
    <div class="container-fluid" style="padding: 0;">
        <section class="map col-xs-12 col-lg-12 map">
            <div id='wptmap'></div>
        </section>
    </div>

    <!-- Palas -->
    <section id="palas" class="services">
        <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="row">
                <div class="col-lg-12 col-xs-12 text-center" style="margin-bottom: 14px;">
                    <h2>Palas</h2>
                    <hr class="small hr_black">
                </div>
                <div class="row hidden-xs" style="margin-bottom: 30px;">
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-1">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/palas1.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-1" style="color: black;">Como elegir tu pala de pádel</a></h3>
                                <p class="lead">A la hora de comprar una pala de pádel es importante tener en cuenta ciertas características: la forma, el tamaño, el peso, el balance, los materiales de los que está hecha, el núcleo...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-1" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-2">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/palas4.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-2" style="color: black;">Nuevas palas Drop Shot. Tecnología CURV</a></h3>
                                <p class="lead">El lanzamiento de la nueva colección de palas de pádel para el 2015 de la firma Drop Shot trae la nueva tecnología CURV, un termoplástico que Drop Shot ha incorporado en las...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-2" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row hidden-xs">
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-3">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/palas2.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-3" style="color: black;">Grip vs overgrip, EVA vs FOAM</a></h3>
                                <p class="lead">Cuando un aficionado al pádel se dispone a comprar una pala, debería plantearse si le conviene EVA o FOAM. También se suele conformar con el mango que viene de serie...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-3" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-4">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/palas3.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-4" style="color: black;">Palas para evitar lesiones de brazo</a></h3>
                                <p class="lead">Las palas transmiten los golpes al brazo. La lesión más conocida del jugador de tenis y pádel es la epicondilitis, que puede estar producida por un peso incorrecto de la pala...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-4" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row hidden-sm hidden-md hidden-lg" style="margin-bottom: 30px; margin-left: 1px;">
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-1">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/palas1.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-1" style="color: black;">Como elegir tu pala de pádel</a></h3>
                                <p class="lead">A la hora de comprar una pala de pádel es importante tener en cuenta ciertas características: la forma, el tamaño, el peso, el balance, los materiales de los que está hecha, el núcleo...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-1" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-2">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.3);" src="img/palas4.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-2" style="color: black;">Nuevas palas Drop Shot. Tecnología CURV</a></h3>
                                <p class="lead">El lanzamiento de la nueva colección de palas de pádel para el 2015 de la firma Drop Shot trae la nueva tecnología CURV, un termoplástico que Drop Shot ha incorporado en las...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-2" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="row hidden-sm hidden-md hidden-lg" style="margin-left: 1px;">
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-3">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/palas2.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-3" style="color: black;">Grip vs overgrip, EVA vs FOAM</a></h3>
                                <p class="lead">Cuando un aficionado al pádel se dispone a comprar una pala, debería plantearse si le conviene EVA o FOAM. También se suele conformar con el mango que viene de serie...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-3" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 text-center">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#palas-4">
                                <img class="img-portfolio img-responsive" style="border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.7);" src="img/palas3.jpg">
                            </a>
                            <div class="post-content">
                                <h3><a href="#" data-toggle="modal" data-target="#palas-4" style="color: black;">Palas para evitar lesiones de brazo</a></h3>
                                <p class="lead">Las palas transmiten los golpes al brazo. La lesión más conocida del jugador de tenis y pádel es la epicondilitis, que puede estar producida por un peso incorrecto de la pala...</p>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#palas-4" class="btn btn-lg btn-dark" style="margin-top: 60px">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Modals -->
        <div class="modal fade" id="palas-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Como elegir tu pala de pádel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Para poder elegir tu pala de forma adecuada, lo primero es conocer algunos aspectos básicos sobre las características que hacen a una pala diferente de otra.</p>
                                <p>1. Forma y balance de la pala</p>
                                <p>La forma es posiblemente uno de los aspectos más importantes a tener en cuenta y posiblemente en lo primero que solemos fijarnos. Además, la forma de la pala está estrechamente relacionada con su balance (equilibrio), otro aspecto a tener muy en cuenta. Existen tres formas diferentes de palas de pádel:</p>
                                <p><img src="img/forma-palas.jpg"></p>
                                <p> - FORMA DE DIAMANTE. Estas palas se caracteriza por tener la parte superior achatada. Este tipo de pala tiene el equilibrio alto, es decir, el peso está distribuido hacia la cabeza para conseguir mayor inercia en el golpeo (efecto martillo). En este tipo de pala, el punto dulce es mas pequeño y son menos maniobrables. Sin embargo, el jugador con suficiente nivel y fuerza consigue una potencia mucho mayor. Por lo tanto, sería recomendable para jugadores de nivel avanzado que buscan potencia.</p>
                                <p> - FORMA DE LÁGRIMA. Este tipo de pala está a medio camino entre la forma de diamante y la redonda. El balance es algo menor que en las de forma de diamante por lo que también son más manejables. Se trata del grupo de palas mas polifacéticas con una buena relación entre potencia y control. </p>
                                <p> - FORMA REDONDA. El equilibrio en este tipo de pala es bajo, el peso está distribuido hacia el puño, por lo que son muy manejables. La manejabilidad de la pala es un aspecto fundamental para el jugador que se inicia y necesita mover la pala con facilidad para aprender a realizar correctamente cada golpe. Esto no quiere decir que los jugadores de nivel alto no elijan este tipo de pala ni mucho menos, ya que es ideal para los jugadores de nivel alto que buscan manejabilidad y control.</p>
                                <p>2. Peso de la pala</p>
                                <p>No existe un peso adecuado para las palas de pádel sino el peso adecuado para cada jugador atendiendo a una serie de factores y características. Las palas más livianas permiten moverlas con mayor velocidad proporcionándonos una mejor respuesta en la red a la hora de volear. Las palas de pádel más pesadas son más difíciles de mover pero nos dan más potencia a la hora de impactar la bola, siempre y cuando el jugador sea capaz de moverla con la suficiente velocidad.</p>
                                <p>Ten en cuenta que el balance de la pala está relacionado con el peso de la misma. Una pala con balance alto (forma diamante) dará sensación de mayor peso y por el contrario una pala con balance bajo (redonda) dará menor sensación de peso. </p>
                                <p>Consejo: Trata de jugar con el peso más alto en el que te encuentres cómodo. Cuanta más masa sujete el golpe, menos tendrá que soportar tu brazo.</p>
                                <p>3. Dureza de la superficie</p>
                                <p>La dureza de la superficie de impacto te facilitará determinado tipo de juego y te perjudicará otro. Las palas de pádel blandas, te darán mayor potencia y te dificultarán el control, es decir, te ayudarán a defenderte en el fondo y te darán potencia en la red. También debes tener en cuenta que cuanto más blandas sean las palas posiblemente su vida útil será menor. En el caso de las palas de pádel duras ocurrirá lo contrario. Por tanto si por tu condición física no tienes problemas para aportar potencia a la bola, una pala de pádel dura te aportará un control mucho mayor en tus golpes, sobre todo voleando en la red.</p>
                                <p>4. Nivel del jugador</p>
                                <p> - INICIACIÓN. Lo más aconsejable para los jugadores que se inician, es elegir una pala de pádel ligera y de forma redondeada para poder moverla fácilmente. Lo principal en la fase de iniciación es aprender a colocar la pala para golpear correctamente y este tipo de palas facilita tal fin.</p>
                                <p> - INTERMEDIO. Los jugadores en progresión pueden jugar con palas algo más pesadas y con formatos redondo o de lágrima en función de sus preferencias ente potencia y control.</p>
                                <p> - AVANZADO. En general, los jugadores con un nivel de juego avanzado y buena condición física usarán palas de mayor peso para conseguir mayor potencia y contundencia en el golpe. El jugador de nivel avanzado se encontrará cómodo con cualquier forma de pala. La forma de la pala dependerá de sus preferencias entre potencia y control pudiendo jugar con cualquier formato. Las palas con forma de diamante serán más adecuadas para jugadores ofensivos que prioricen la potencia, mientras que las redondas para los jugadores defensivos que aprecien el control. Las formas de lágrima serán adecuadas para jugadores polifacéticos que requieran un equilibrio entre potencia y control.</p>
                                <p>A modo de resumen, en este cuadro podemos ver la recomendación de peso y forma de la pala en función del nivel de juego, sexo y prioridades del jugador:</p>
                                <p><img src="img/tabla-palas.png"></p>
                                <p>Estas son solo unos conocimientos y recomendaciones generales. Sin embargo, a la hora de comprar tu pala de pádel lo aconsejable es hacerlo en una tienda especializada en padel donde puedan asesorarte convenientemente. Evita comprar tu pala directamente a un monitor (venta en maletero) o en la tienda del club, el asesoramiento puede verse influenciado por sus propios intereses. Además, el servicio post venta (garantías, etc.) suele ser muy deficiente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="palas-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Nuevas palas Drop Shot con Tecnología CURV</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>El lanzamiento al mercado de la nueva colección de palas de pádel para el 2015 de la firma Drop Shot fue en el Master Finals de Madrid, donde se pudo ver juntos en acción a Fernando Belasteguin y Juan Martín Díaz, la pareja que más ha destacado en el pádel internacional durante la última década. Esta última colección de palas incluye una nueva creación de la prestigiosa marca, la Conqueror 3.0, que será utilizada el año que viene por el número uno actual, Juan Martín Díaz. Asimismo, se presentarán las nuevas innovaciones tecnológicas que se integran en el nuevo catálogo de Drop Shot, donde destaca un nuevo material: CURV.</p>
                                <p>Se trata de un novedoso material empleado en la fabricación de palas que pretender ser una innovación revolucionaria en el mundo del pádel. Concretamente, CURV es un termoplástico que Drop Shot ha incorporado en las caras de las palas que posibilita incrementar la durabilidad, la resistencia, la elasticidad y la potencia de estas, dotándolas de un manejo excelente y con unos resultados que, anteriormente, nunca se habían logrado.</p>
                                <p>CURV es un material que han empleado ya reconocidas compañías multinacionales en la fabricación de diferentes productos como chalecos antibalas, componentes de vehículos, amplificadores de equipos de música, maletas, protecciones para diferentes disciplinas deportivas, etc. Con la introducción de este elemento se aumenta considerablemente la resistencia a los impactos y, asombrosamente, la resistencia se incrementa cuanto más baja es la temperatura, de tal modo que CURV brinda una elevada fortaleza en momentos en los que otros tipos de materiales sufren roturas fácilmente.</p>
                                <p>A esta mayor resistencia a los choques y a los impactos como principal característica hay que añadir que estas nuevas palas con la tecnología CURV integrada ofrecen mayor fuerza, mayor potencia, más flexibilidad y, todo ello, siendo más ligeras y manejables. No cabe duda de que esta novedad en la fabricación de palas de pádel supone un nuevo impulso en la industria de este deporte, puesto que se puede poner a disposición de los profesionales y de los aficionados palas más sólidas, con un aumento de la durabilidad manifiesto, sin perder un ápice de otros factores técnicos.</p>
                                <p>Sin duda, esta mejora sin precedentes trae consigo un avance en el mercado de palas de pádel, lo que solo puede repercutir positivamente, puesto que la apuesta por las nuevas tecnologías permite que los jugadores progresen cada vez más en su juego y eso, en definitiva, beneficia claramente al espectáculo.</p>
                                <p>Parece que en 2015 la mayoría de fabricantes de palas se están preocupando más por la durabilidad de la palas que por la jugabilidad, un aspecto que supone grandes perdidas a las marcas y muchos quebraderos de cabeza a los jugadores, ya que no saben cuanto va a durar una pala, ni si va a soportar el juego continuo de una persona que juega regularmente, esperemos que además de durabilidad la innovación en el pádel nos traiga también grandes factores de jugabilidad y rendimiento.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="palas-3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Grip vs overgrip, EVA vs FOAM</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>GRIP VS OVERGRIP</p>
                                <p>Este es uno de los pequeños trucos del mundo del pádel que con muy poca inversión hace que nuestro juego aumente de manera rápida y efectiva. Cuando cogemos una raqueta de pádel generalmente de la forma “continental”, lo conseguimos deslizando con la mano abierta entre los dedos pulgar e índice por el canto de la pala hasta llegar al mando de la pala y cerrar la mano, esta es la forma de coger la pala de la manera más correcta posible, porque nos permitirá golpear la bola con mayor precisión y preparándonos mejor el golpeo ya sea de revés o de derechas.</p>
                                <p>Una vez que hemos dominado la empuñadora continental aún podemos seguir mejorando nuestra forma de coger la pala y aumentando considerablemente la potencia o el control, principalmente aplicando capas encima del grip original mediante overgrips, por norma general las marcas no sacan tallas de palas por lo que no se ajustan a nuestra necesidades, y generalmente el jugador que comienza a practicar pádel se conforma con el mango que viene de serie, esto es un error, porque por normal general y en el caso de los hombres la empuñadura es pequeña, tenemos que tratar de personalizar nuestra pala y forma de coger la empuñadura lo máximo posible, para encontrarnos cómodos y sobre todo para prevenir lesiones.</p>
                                <p>Podemos aumentar el mango de la pala colocando un overgrip grueso o simplemente colocando varios, no hay medida justa tenéis que tener en cuenta que el agarre debe ser cómodo, y normalmente no es el que nos da el fabricante, muchos jugadores profesionales colocan entre tres y cuatro overgrips, generalmente conforme vamos aumentando esta cantidad va aumentando la pala de peso, principalmente por la ganancia de peso podemos desiquilibrar la pala o colocarla con un balance de control total, pero sobre todo por el mejor agarre que tenemos, además puede mejorar considerablemente si tenemos algún molestia en el codo (epicondilitis), ya que absorbe mejor las vibraciones y además la articulación hace menos esfuerzo al tener la mano más abierta.</p>
                                <p>La otra posibilidad es poner un único overgrip y además fino , con este tipo de empuñadura ganaremos en control y podrás dirigir mejor los golpes pero es probable que también te cueste más mover la pelota por la pista de pádel.</p>
                                <p>Además actualmente hay mucha variedad de overgrips, todas la marcas de pádel están tratando de mejorar al máximo sus componentes, algunas además de incluir textura que les diferencias incluyen geles o composiciones que mejoran mejor la absorción del sudor, aumentando de esta manera el agarre de la pala.</p>
                                <p>La colocación del overgrip en la pala de pádel es una tarea muy sencilla, en menos de cinco minutos podremos cambiarlo y poder usar el nuevo.</p>
                                <p>EVA VS FOAM</p>
                                <p>Cuando un aficionado al pádel se dispone a comprar una pala de padel debería de plantearse que necesita EVA o FOAM, aunque no se suele hacer por que muchos ponen por encima o su forma de juego o su marca preferida como datos mas importantes a la hora de elegir una pala.</p>
                                <p>Esta claro que tanto la EVA como el FOAM son dos de los materiales más usados en las palas de pádel, aunque actualmente hay una ligera tendencia hacia las palas de pádel de EVA y os vamos a explicar las características para que podáis elegir con todas las razones a vuestro favor.</p>
                                <p>Primero hablemos del FOAM, es una espuma de poliestireno. Es un material con unas características ideales para la absorción de vibraciones, mejorando mucho el tacto con la bola de pádel. El FOAM nos aportará un mejor mejor control y una amortiguación que hace que no se necesite tanta fuerza para despedir la bola.</p>
                                <p>Quizá la pega es que no sean tan duraderas como las palas que puedan llevar EVA . Y la virtud de todos es conocida que nos ayuda cuanto tenemos alguna molestia en brazos o en el simple codo de tenista, ayuda a que no suframos el dolor gracias a la absorción de impacto y vibraciones. Algunos fabricantes que fabrican sus palas con material Foam es la marca Royal Padel , incluso otras marcas importantes como por ejemplo HEAD están incorporándolas a su catálogo.</p>
                                <p>Por otra parte tenemos las palas con núcleo de Eva, que no es el nombre de ninguna mujer se trata de otro tipo de material para las palas de pádel. Este es mucho mas extendido. Su nombre son siglas y viene de Ethylene Vinyl Acetat lo primero que deberíamos de decir es que aporta una rigidez que hace que sea algo mas dura que el Foam y por lo tanto su tacto será mucho mas duro.</p>
                                <p>La absorción de vibraciones en el EVA es mucho menor que en el FOAM, las palas de EVA tienen mayor potencia ya que podemos imprimir muchas más potencia con el golpeo del brazo y sobretodo por el motivo de no absorber las vibraciones se reduce también la perdida de potencia. Por otra parte el Eva ofrece mejores acabados y le da mucha mas vida útil de la pala. La mayoría de marcas utiliza esta goma, Varlion, Vairo, las palas Bullpadel, Dropshot…</p>
                                <p>Si queremos reconocer una sobre otra lo único que tenemos que hacer es mirar en el interior de los agujeros de las palas y si el interior es liso estaremos delante de una pala de EVA. Sin embargo las palas de FOAM serán mas rugosas como si tuvieran burbujitas, también si golpeamos con la palma de la mano la pala el foam suena como hueco.</p>
                                <p>Parece que la pega más importante sea la durabilidad y como perjudicado sea el FOAM pero a todo esto tenemos que pensar que es acosta de la comodidad. Cuando decimos estar mas cómodos nos referimos a el estado que conseguimos jugar con algún tipo de lesión o molestia de brazo y no padecer, algo que es un placer si tenemos una lesión crónica, las palas de FOAM también es mucho más fácil jugar con ellas ya que perdona mejor los errores.</p>
                                <p>La EVA es el material rey por excelencia y es normal sus características de durabilidad la hacen ser deseada, ya que si hacemos una inversión queremos que dure. Aunque como ya hemos dichos dependerá de la vida que le demos a la pala y de la forma de jugar que tengamos. Cuanto mas agresivo sea nuestro juego mas perjudicada siempre será nuestra pala.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="palas-4">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header yellow">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">Palas para evitar lesiones de brazo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Las palas de pádel transmiten los golpes al brazo, por lo que es importante tenerlo en cuenta a la hora de comprar nuestra pala de padel para dolores de brazo o la lesión más conocida del jugador de tenis y pádel: la epicondilitis, lesión que puede estar producida por un peso incorrecto en la pala o por el material o calidad de la pala.</p>
                                <p>Para esto son mejores las palas con núcleo de FOAM. El motivo no es otro que absorbe mejor las vibraciones, el impacto de la bola sobre la pala, despide de una manera más blanda. Si que es verdad que hay que realizar más fuerza para que despida más debido a esta absorción pero a la larga tu brazo lo agradecerá.</p>
                                <p>PALAS DE PADEL RECOMENDADAS PARA LESIONES DE BRAZO:</p>
                                <p> - Royal Pádel RP Aniversario</p>
                                <p> - Royal Padel RP790 Whip</p>
                                <p> - Head Tornado N2</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- WPT -->
    <section id="wpt" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>World Padel Tour</h2>
                    <hr class="small hr_black">
                    <p class="lead"><a target="_blank" href="http://www.worldpadeltour.com/">World Padel Tour (WPT)</a> es el circuito de pádel profesional más importante del mundo,
                         tanto por el nivel organizativo de los torneos como por la participación de los mejores jugadores a nivel internacional.</p>
                    <p class="lead">Cada año se celebran entre 15 y 20 torneos WPT más un máster final en el que se enfrentan las mejores parejas del <a href="#ranking">ranking</a>. Los jugadores participantes recorren
                         diferentes ciudades del mundo para ir sumando puntos y entrar en el Máster final, donde tan sólo acuden las 8 mejores parejas del ranking tras completar la temporada.
                         Se disputan pruebas masculinas y femeninas, aunque el número de campeonatos WPT de mujeres es menor, aproximadamente la mitad.</p>
                    <p class="lead">El circuito WPT tiene establecida una normativa y reglamentos de juego y disciplina, los cuales se pueden consultar aquí:</p>
                    <p>
                        <a target="_blank" href="http://www.worldpadeltour.com/sites/default/files/reglamento/NORMATIVA%20TECNICA.pdf"><img class="img-portfolio img-wpt" src="img/reglamento1.png"></a>
                        <a target="_blank" href="http://www.worldpadeltour.com/sites/default/files/reglamento/REGLAMENTO%20FIP.pdf"><img class="img-portfolio img-wpt" src="img/reglamento2.png"></a>
                        <a target="_blank" href="http://www.worldpadeltour.com/sites/default/files/reglamento/reglamento%20de%20disciplina%20CON%20SELLO.pdf"> <img class="img-portfolio img-wpt" src="img/reglamento3.png"></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Multimedia -->
    <section id="multimedia" class="portfolio">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Multimedia</h2>
                    <hr class="small hr_white">
                    <div class="row" style="margin-bottom: 11px;">
                        <div class="separador"><span>2015</span></div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediaf15">
                                    <img class="img-portfolio img-responsive" src="img/2015-2.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediaf15" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Fotos</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediav15">
                                    <img class="img-portfolio img-responsive" src="img/2015-1.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediav15" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Vídeos</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediaw15">
                                    <img class="img-portfolio img-responsive" src="img/2015-3.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediaw15" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Programas WPT</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediap15">
                                    <img class="img-portfolio img-responsive" src="img/2015-4.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediap15" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Partidos completos</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 11px;">
                        <div class="separador"><span>2014</span></div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediaf14">
                                    <img class="img-portfolio img-responsive" src="img/2014-1.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediaf14" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Fotos</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediav14">
                                    <img class="img-portfolio img-responsive" src="img/2014-2.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediav14" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Vídeos</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediaw14">
                                    <img class="img-portfolio img-responsive" src="img/2014-3.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediaw14" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Programas WPT</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediap14">
                                    <img class="img-portfolio img-responsive" src="img/2014-4.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediap14" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Partidos completos</a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 11px;">
                        <div class="separador"><span>2013</span></div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediaf13">
                                    <img class="img-portfolio img-responsive" src="img/2013-1.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediaf13" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Fotos</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediav13">
                                    <img class="img-portfolio img-responsive" src="img/2013-2.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediav13" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Vídeos</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediaw13">
                                    <img class="img-portfolio img-responsive" src="img/2013-3.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediaw13" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Programas WPT</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-item">
                                <a href="#" data-toggle="modal" data-target="#mediap13">
                                    <img class="img-portfolio img-responsive" src="img/2013-4.png">
                                </a>
                                <a href="#" data-toggle="modal" data-target="#mediap13" class="btn btn-light" style="color: #0247d0; margin-top: 14px;">Partidos completos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Modals -->
        <div class="modal fade" id="mediaf13">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2013 - Fotos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/Caceres.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/03%20Lima.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/Sentadita.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/4%20Miguelito.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/8%20Juani.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/Elypaty.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/012%20Jordi.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/Gaby.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/Chico.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2013/imagenes/Las%20mejores%20fotos%20de%202013/German.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediav13">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2013 - Vídeos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/7oJj76Qj7Io?rel=0&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediaw13">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2013 - Programas WPT</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/t_GljGZCP1A?list=PL1n6kdP760aPAhEAYL6mQgJECLhBfEnFG&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediap13">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2013 - Partidos completos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/videoseries?list=PLC2JCBg1aEp0yYaXMAJzr1VWAKvRjaKQ6&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediaf14">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2014 - Fotos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/Lamplerti%2044.JPG" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/navarro%201.JPG" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/Paquito%20Grabiel.JPG" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/bela%206.JPG" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/cristian%203g.JPG" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/martin%201.JPG" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/grabiel%20s8.JPG" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/marrero%20xx1.JPG" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/aday%205.JPG" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/2014/imagenes/Masters%20Finals%20Madrid/martin%205.JPG" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediav14">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2014 - Vídeos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/_zPcHjPPRvM?rel=0&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediaw14">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2014 - Programas WPT</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/G0pKLDuBNIs?list=PLC2JCBg1aEp2sxmaVTUtiprinArX1XRHe&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediap14">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2014 - Partidos completos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/lFF3QuETcLU?rel=0&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediaf15">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2015 - Fotos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP4811.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP6155.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_kdp4925.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP5720.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP5324.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP5051.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP6094.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP5344.jpg" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP5317.jpg" alt="">
                            </div>
                            <div class="col-md-6" style="padding-left: 0; padding-bottom: 25px;">
                                <img class="col-xs-12" src="http://www.worldpadeltour.com/fotos/imagenes/Estrella%20Damm%20Barcelona%20Master-Trofeo%20Adeslas/_KDP5550.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediav15">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2015 - Vídeos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/videoseries?list=PLC2JCBg1aEp27u5T98E7HY_Oz-dr8_Nfa&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediaw15">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2015 - Programas WPT</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/iQqTm09k25c?list=PLOqH7qtUNRO3Z2jw-X2D7SiuF1OaqjAd3&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mediap15">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header blue">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title">2015 - Partidos completos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-top: 25px; margin-bottom: 25px;">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <div style="position:relative; width: 100%; height: 0; padding-bottom: 56.25%; margin-bottom: 20px">
                                    <iframe src="https://www.youtube.com/embed/L1ubBclMslI?list=PLOqH7qtUNRO0ezizLdOecviUqJrGOXTHB&amp;theme=light&amp;color=white;showinfo=0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px; box-shadow: 0 0 20px rgba(0,0,0,0.8); border: solid 5px rgb(204, 204, 204);" height="315" frameborder="0" width="420"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-0 col-xs-10 col-xs-offset-1">
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
                <div class="col-lg-4 col-lg-offset-4 col-xs-10 col-xs-offset-1">
                    <h2 class="text-center">Contacto</h2>
                    <hr class="small hr_black">
                    <form action="mail/contact_me.php" method="POST">
                        <div class="row control-group error">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <i class="fa fa-user fa-fw"></i>
                                <input type="text" name="name_" class="form-control" placeholder="Nombre" id="name_" required="" data-validation-required-message="Por favor introduce tu nombre." aria-invalid="true">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group error">
                            <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 10px;">
                                <label>Correo electrónico</label>
                                <i class="fa fa-at fa-fw"></i>
                                <input type="email" name="email_" class="form-control" placeholder="Correo electrónico" id="email_" required="" data-validation-required-message="Por favor introduce tu dirección de correo electrónico." aria-invalid="true">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group error">
                            <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 10px;">
                                <label>Número de teléfono</label>
                                <i class="fa fa-phone fa-fw"></i>
                                <input type="tel" name="phone_" class="form-control" placeholder="Número de teléfono" id="phone_" required="" data-validation-required-message="Por favor introduce tu número de teléfono." aria-invalid="true">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls" style="margin-top: 10px;">
                                <label>Mensaje</label>
                                <i class="fa fa-envelope fa-fw"></i>
                                <textarea rows="5" name="message_" class="form-control" placeholder="Mensaje" id="message_" required="" data-validation-required-message="Por favor introduce tu mensaje." aria-invalid="false" style="height: 112px;"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
                                <br/>
                                <span id="resultado"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center col-lg-12 col-xs-12" style="margin-top: 125px">
                    <h4><strong>Pádel x tres</strong></h4>
                    <p>ETSIT UPM<br>Avenida Complutense 30<br>28040 Madrid, España</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com" style="color: #0247d0">oscar.vazquezb@alumnos.upm.es</a></li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a target="_blank" href="http://tewcvboscar.wordpress.com/"><i class="fa fa-wordpress fa-fw fa-3x" style="color: #0247d0;"></i></a>
                        </li>
                        <li>
                            <a href="#contact"><i class="fa fa-facebook fa-fw fa-3x" style="color: #0247d0;"></i></a>
                        </li>
                        <li>
                            <a href="#contact"><i class="fa fa-twitter fa-fw fa-3x" style="color: #0247d0;"></i></a>
                        </li>
                        <li>
                            <a href="#contact"><i class="fa fa-instagram fa-fw fa-3x" style="color: #0247d0;"></i></a>
                        </li>
                        <li>
                            <a href="#contact"><i class="fa fa-youtube fa-fw fa-3x" style="color: #0247d0;"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Pádel x tres 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Google Maps JavaScript -->
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
    <script src="js/mapa.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/preloader.js"></script>
    <script src="js/side-menu.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/dock-prev-item.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/twitter.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper-initialize.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>