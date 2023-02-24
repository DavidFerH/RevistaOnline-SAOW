<?php

    require_once('Model/M_getMagazines.php');
    $Magazines = new Magazines();
    $MagazinesData = $Magazines->getMagazines();

    require_once('Views/V_getMagazines.php');

?>