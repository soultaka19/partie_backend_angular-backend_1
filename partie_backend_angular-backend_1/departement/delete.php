<?php

require_once '../config.php';
require_once '../acces.php';


$id=$_GET["id"];



if($db->exec("DELETE FROM departement WHERE id=$id")){
    echo json_encode(["status"=>true,"message"=>"departement supprimé avec succés"]);

}else{
    echo json_encode(["status"=>false,"message"=>"Erreur de suppression"]);
}
/*
$statement = $db->prepare(
    'DELETE FROM  departement WHERE id=?'
);

if($statement->execute([$id])){
    echo json_encode(["status"=>true,"message"=>"departement supprimé avec succés"]);
 } else {
    echo json_encode(["status"=>false,"message"=>"Erreur de suppression"]);
    }
*/

