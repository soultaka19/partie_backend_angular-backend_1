<?php
    require_once './config.php';
    require_once './acces.php';


    $id = $_GET["id"];

   //$les_filires_departements = $db->query("select  *from classe c,filiere f,departement d where c.id_filiere = f.id and f.id_departement = d.id and c.id=$id ")->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($les_filires_departements);


    $les_filires_departements = $db->query("select d.nom_departement,d.code_depart,f.code_filiere,
    f.nom_filiere, c.id, c.code_classe, c.nom from classe c,filiere f,departement d where c.id_filiere = f.id and f.id_departement = d.id and c.id=$id ")->fetch();//All(PDO::FETCH_ASSOC);
    echo json_encode($les_filires_departements);

