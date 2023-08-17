<?php
require_once '../config.php';
require_once '../acces.php';
$les_departements =$db->query("select * from departement" )->fetchAll(PDO::FETCH_ASSOC);
echo json_encode ($les_departements ) ;
?>