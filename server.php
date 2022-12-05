<?php 
header('Content-Type: application/json');
$string =  file_get_contents('db.json');
$dischi = json_decode($string,true);

echo json_encode($dischi);


?>