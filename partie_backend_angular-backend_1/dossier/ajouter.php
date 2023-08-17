<?php
// accepter les requetes provenant du port 4200



require_once '../config.php';
require_once '../acces.php';

$json = file_get_contents('php://input');
$data = json_decode($json,true);
$id_classe=$data["id"];
$nom_candidat=$data["nom_candidat"];
$prenom_candidat=$data["prenom_candidat"];
$sexe=$data["sexe"];
$naissance=$data["naissance"];
$adresse=$data["adresse"];
$nationalite=$data["nationalite"];
$email=$data["email"];
$telephone=$data["telephone"];
$ecole_dorigine=$data["ecole_dorigine"];
$diplome_obtenu=$data["diplome_obtenu"];
$date_obtention=$data["date_obtention"];


$statement = $db->prepare(
    'INSERT INTO dossier(id_classe,nom_candidat,prenom_candidat,sexe,naissance,adresse,nationalite,email,telephone,ecole_dorigine,diplome_obtenu,date_obtention) VALUES(?, ?, ?,?, ?, ?,?, ?, ?,?, ?, ?)'
);

if(!empty($id_classe) ){
    if($statement->execute([$id_classe,$nom_candidat,$prenom_candidat,$sexe,$naissance,$adresse,$nationalite,$email,$telephone,$ecole_dorigine,$diplome_obtenu,$date_obtention])){
        echo json_encode(["status"=>true,"message"=>"filiere ajouté avec succés"]);
     } else {
        echo json_encode(["status"=>false,"message"=>"Erreur d'ajout"]);
        }
            
}

 


