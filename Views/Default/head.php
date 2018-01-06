<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>User records</title>

    <link rel="stylesheet" href="<?php echo URL.VIEWS.DFT;?>Css/Style.css">

    <script src="<?php echo URL.VIEWS.DFT;?>Js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo URL.VIEWS.DFT;?>Js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo URL.VIEWS.DFT;?>Js/funciones.js" type="text/javascript"></script>
</head>
<body>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);

        Session::start();
        $UserName = Session::getSession("User");
        if($UserName != "") {
    ?>
    <div class="head">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo URL; ?>Index/index">Inicio</a></li>

            <li><a href="<?php echo URL; ?>User/destroySession">Cerrar sesion</a></li>
        </ul>
        <h2><?php echo "Bienvenido: ".$UserName; ?></h2>
    </div><br><br>
    <?php } ?>
