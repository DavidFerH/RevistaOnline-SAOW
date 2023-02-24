<?php
    require('../db/DB.php');
    require_once('../Model/M_createEntry.php');
    $CRUM = new CreateEntry();

    $title = $_REQUEST['title'];
    $number = $_REQUEST['number'];
    $editorial = $_REQUEST['editorial'];
    $date = $_REQUEST['publicationDate'];
    $image = $_FILES['coverImage'];

    if ($image) {
        $coverPath = $_SERVER['DOCUMENT_ROOT'] . '/SAOW Codigo/revistaOnline/src/covers' . '/' . $image['name'];

        move_uploaded_file($image['tmp_name'], $coverPath);
    } else {
        $coverPath = '';
    }

    $CRUM->setMagazine($title, $number, $editorial, $date, $coverPath);
    header("Location: http://localhost/SAOW%20Codigo/revistaOnline/createEntry.php");
?>