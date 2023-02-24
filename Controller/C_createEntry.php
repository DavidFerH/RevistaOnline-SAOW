<?php

    require_once('Model/M_createEntry.php');
    $CRUM = new CreateEntry();
    $AuthorsArray = $CRUM->getAuthors();
    $ArticlesArray = $CRUM->getArticles();
    $MagazinesArray = $CRUM->getMagazines();

    require_once('Views/V_createEntry.php');

?>