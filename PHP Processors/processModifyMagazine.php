<?php
    require_once("../db/DB.php");
    require_once('../Model/M_magazineModifier.php');
    $MagazineModifier = new MagazineModifier();

    $COD_REV = $_REQUEST['COD_REV'];
    $title = $_REQUEST['title'];
    $editorial = $_REQUEST['editorial'];
    $number = $_REQUEST['number'];
    $FECHA_PUB = $_REQUEST['publicationDate'];

    $MagazineModifier->updateMagazine($COD_REV, $title, $editorial, $number, $FECHA_PUB);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>