<?php
    require_once './config.php';
    require_once './acces.php';


    $id = $_GET["id"];

    $une_filiere = $db->query("select f.code_filiere,f.nom_filiere,f.id from departement d,filiere f where d.id=f.id_departement and d.id=$id ")->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($une_filiere);
