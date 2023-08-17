<?php
// accepter les requetes provenant du port 4200
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: *");


require_once '../config.php';

$json = file_get_contents('php://input');
$data = json_decode($json,true);
$code_depart=$data["code_depart"];
$nom_departement=$data["nom_departement"];
$chef_depart=$data["chef_depart"];
$secretaire=$data["secretaire"];


$statement = $db->prepare(
    'INSERT INTO departement(code_depart,nom_departement,chef_departement,secretaire) VALUES(?, ?, ?, ?)'
);

if(!empty($code_depart) ){
    if($statement->execute([$code_depart,$nom_departement,$chef_depart,$secretaire])){
        echo json_encode(["status"=>true,"message"=>"departement ajouté avec succés"]);
     } else {
        echo json_encode(["status"=>false,"message"=>"Erreur d'ajout"]);
        }
            
}

 


