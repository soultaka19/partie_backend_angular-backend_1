<?php
require_once '../config.php';
require_once '../acces.php';

$json = file_get_contents('php://input');
$data = json_decode($json,true);
$id=$data["id"];
$code_filiere=$data["code_filiere"];
$nom_filiere=$data["nom_filiere"];
$id_departement=$data["id_departement"];

$statement = $db->prepare(
    'UPDATE  filiere set code_filiere=?,nom_filiere=?,id_departement=?WHERE id=?'
);

if($statement->execute([$code_filiere,$nom_filiere,$id_departement,$id])){
    echo json_encode(["status"=>true,"message"=>"filiere modifié avec succés"]);
 } else {
    echo json_encode(["status"=>false,"message"=>"Erreur de modification"]);
    }