<?php

    require_once('Model/M_magazineModifier.php');
    $MagazineModifier = new MagazineModifier();

    $IDmagazine = $_REQUEST['IDmagazine'];

    $Magazine = $MagazineModifier->getMagazineToModify($IDmagazine);

    $data = $Magazine[0];
    $COD_REV = $data['COD_REV'];

    $RelatedArticles = $MagazineModifier->getRelatedArticles($COD_REV);

    $Articles = $MagazineModifier->getArticles();

    require_once('Views/V_magazineModifier.php');

?>