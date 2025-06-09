<?php
    /*
    * Proyecto desarrollado por Esteban Seguí Casas
    * Fecha de creación: 17/03/2024
    */
    include('lang-functions.php');
    $idioma = obtenerIdiomaActual();
    include('lang.php');
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma ?>" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">


    <!-- Author Meta -->
    <meta name="author" content="Esteban Seguí Casas - - <a href='https://esteveseguicasas.xyz/'>Sitio web de Esteban Seguí Casas</a>"">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Can Pujol Inca</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">


    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <?php

    ?>
</head>
<body>

<header id="header" id="home">
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.php"><img src="img/logo.png" alt="can pujol inca" title="can pujol inca" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.php"><?php echo traducir('home'); ?></a></li>
                    <li><a href="about.php"><?php echo traducir('casal/museu'); ?></a></li>
                    <li><a href="visits.php"><?php echo traducir('visites'); ?></a></li>
                    <li><a href="offer.php"><?php echo traducir('oferta'); ?></a></li>
                    <li class="espacio"><a class="btn-reserva" href="reserva.php"><?php echo traducir('reserva'); ?></a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
            <div class="top-head-right">
                <ul>
                    <li><a href="?lang=ca"><img class="flag" src="img/flags/ca.png" alt="Català"></a></li>
                    <li><a href="?lang=es"><img class="flag" src="img/flags/es.png" alt="Español"></a></li>
                    <li><a href="?lang=en"><img class="flag" src="img/flags/en.png" alt="English"></a></li>
                    <li><a href="?lang=de"><img class="flag" src="img/flags/de.png" alt="Deutsch"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header><!-- #header -->