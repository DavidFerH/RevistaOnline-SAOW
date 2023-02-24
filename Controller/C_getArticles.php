<?php

    require_once('Model/M_getArticles.php');
    $Articles = new Articles();
    $ArticlesData = $Articles->getArticles();

    require_once('Views/V_getArticles.php');

?>