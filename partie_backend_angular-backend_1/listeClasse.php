<?php
    require_once './config.php';
    require_once './acces.php';


    $id = $_GET["id"];

    $une_classe = $db->query("select c.id ,c.code_classe,c.nom from classe c,filiere f where c.id_filiere=f.id and f.id=$id ")->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($une_classe);
