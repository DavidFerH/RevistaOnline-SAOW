<?php
    require_once("../db/DB.php");
    require_once('../Model/M_authorModifier.php');
    $AuthorModifier = new AuthorModifier();

    $DNI = $_REQUEST['DNI'];

    $AuthorModifier->deleteAuthor($DNI);

    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>