<?php

    require_once('Model/M_authorModifier.php');
    $AuthorModifier = new AuthorModifier();

    $IDauthor = $_REQUEST['IDautor'];

    $Author = $AuthorModifier->getAuthorToModify($IDauthor);

    require_once('Views/V_authorModifier.php');

?>