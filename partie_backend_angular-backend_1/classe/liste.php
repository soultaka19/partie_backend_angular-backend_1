<?php
require_once '../config.php';
require_once '../acces.php';
$les_classes =$db->query("select * from classe  " )->fetchAll(PDO::FETCH_ASSOC);
echo json_encode ($les_classes ) ;
?>