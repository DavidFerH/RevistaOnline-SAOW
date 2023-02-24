<?php
    require_once("../db/DB.php");
    require_once('../Model/M_magazineModifier.php');
    $MagazineModifier = new MagazineModifier();

    $COD_REV = $_REQUEST['COD_REV'];

    $MagazineModifier->deleteMagazine($COD_REV);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>