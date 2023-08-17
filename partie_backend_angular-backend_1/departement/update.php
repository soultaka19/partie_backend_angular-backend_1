<?php

require_once '../config.php';
require_once '../acces.php';

$json = file_get_contents('php://input');
$data = json_decode($json,true);
$id=$data["id"];
$code_depart=$data["code_depart"];
$nom_departement=$data["nom_departement"];
$chef_depart=$data["chef_departement"];
$secretaire=$data["secretaire"];

$statement = $db->prepare(
    'UPDATE  departement set code_depart=?,nom_departement=?,chef_departement=?,secretaire=?WHERE id=?'
);

if($statement->execute([$code_depart,$nom_departement,$chef_depart,$secretaire,$id])){
    echo json_encode(["status"=>true,"message"=>"departement modifié avec succés"]);
 } else {
    echo json_encode(["status"=>false,"message"=>"Erreur d'ajout"]);
    }