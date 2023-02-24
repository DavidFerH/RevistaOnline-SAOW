<?php
    require_once("../db/DB.php");
    require_once('../Model/M_magazineModifier.php');
    $MagazineModifier = new MagazineModifier();

    $COD_REV = $_REQUEST['COD_REV'];
    $COD_ART = $_REQUEST['COD_ART'];

    echo $COD_ART;
    echo $COD_REV;

    $MagazineModifier->linkArticleToMagazine($COD_REV, $COD_ART);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>