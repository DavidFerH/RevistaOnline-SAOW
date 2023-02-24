<?php
    require_once("../db/DB.php");
    require_once('../Model/M_articleModifier.php');
    $ArticleModifier = new ArticleModifier();

    $cod_art = $_REQUEST['cod_art'];

    $ArticleModifier->DeleteArticle($cod_art);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>