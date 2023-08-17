<?php
// accepter les requetes provenant du port 4200



require_once '../config.php';
require_once '../acces.php';

$json = file_get_contents('php://input');
$data = json_decode($json,true);
$code_classe=$data["code_classe"];
$nom=$data["nom"];
$id_filiere=$data["id_filiere"];


$statement = $db->prepare(
    'INSERT INTO classe(code_classe,nom,id_filiere) VALUES(?, ?, ?)'
);

if(!empty($code_classe) ){
    if($statement->execute([$code_classe,$nom,$id_filiere])){
        echo json_encode(["status"=>true,"message"=>"classe ajouté avec succés"]);
     } else {
        echo json_encode(["status"=>false,"message"=>"Erreur d'ajout"]);
        }
            
}

 


