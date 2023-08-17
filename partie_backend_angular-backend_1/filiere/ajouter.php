<?php
// accepter les requetes provenant du port 4200



require_once '../config.php';
require_once '../acces.php';

$json = file_get_contents('php://input');
$data = json_decode($json,true);
$code_filiere=$data["code_filiere"];
$nom_filiere=$data["nom_filiere"];
$id_departement=$data["id_departement"];


$statement = $db->prepare(
    'INSERT INTO filiere(code_filiere,nom_filiere,id_departement) VALUES(?, ?, ?)'
);

if(!empty($code_filiere) ){
    if($statement->execute([$code_filiere,$nom_filiere,$id_departement])){
        echo json_encode(["status"=>true,"message"=>"filiere ajouté avec succés"]);
     } else {
        echo json_encode(["status"=>false,"message"=>"Erreur d'ajout"]);
        }
            
}

 


