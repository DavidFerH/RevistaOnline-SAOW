<?php
    require_once("../db/DB.php");
    require_once('../Model/M_authorModifier.php');
    $AuthorModifier = new AuthorModifier();

    $DNI = $_REQUEST['DNI'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $descripcion = $_REQUEST['descripcion'];

    $AuthorModifier->updateAuthor($DNI, $nombre, $apellidos, $descripcion);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>