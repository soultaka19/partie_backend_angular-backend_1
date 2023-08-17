<?php
    require_once '../config.php';
    require_once '../acces.php';


    $id = $_GET["id"];

    $une_filiere = $db->query("select * from filiere where id=$id ")->fetch();//All(PDO::FETCH_ASSOC);
    echo json_encode($une_filiere);

