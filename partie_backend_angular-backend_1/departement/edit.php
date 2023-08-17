<?php
    require_once '../config.php';
    require_once '../acces.php';


    $id = $_GET["id"];

    $un_depatement = $db->query("select * from departement where id=$id ")->fetch();//All(PDO::FETCH_ASSOC);
    echo json_encode($un_depatement);

