<?php
require_once '../config.php';
require_once '../acces.php';
$les_filieres =$db->query("select * from filiere  " )->fetchAll(PDO::FETCH_ASSOC);
echo json_encode ($les_filieres ) ;
?>