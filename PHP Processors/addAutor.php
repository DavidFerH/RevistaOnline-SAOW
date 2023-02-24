<?php
    require('../db/DB.php');
    require_once('../Model/M_createEntry.php');
    $CRUM = new CreateEntry();

    $dni = $_REQUEST['DNI'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $descripcion = $_REQUEST['descripcion'];


    $CRUM->setAuthor($dni, $nombre, $apellidos, $descripcion);


    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>