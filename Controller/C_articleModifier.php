<?php

    $COD_ART = $_REQUEST['cod_art'];

    require_once('Model/M_articleModifier.php');
    $ArticleModifier = new ArticleModifier();
    $Article = $ArticleModifier->getArticleToModify($COD_ART);

    require_once('Views/V_articleModifier.php');

?>