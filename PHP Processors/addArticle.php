<?php
    require('../db/DB.php');
    require_once('../Model/M_createEntry.php');
    $CRUM = new CreateEntry();

    $idAutor = $_REQUEST['author'];
    $date = $_REQUEST['publicationDate'];
    $title = $_REQUEST['title'];
    $article = $_REQUEST['article'];

    $CRUM->setArticle($idAutor, $date, $title, $article);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>