<?php 
header('Content-Type: application/json');
$string =  file_get_contents('db.json');
$dischi = json_decode($string,true);

echo json_encode($dischi);

$random = rand(1990, 2022);

if (!empty($_POST)) {

$newDisc = [
  'title' => $_POST['title'],
  'author' => $_POST['author'],
  'year' =>  $random,
  'poster' => $_POST['img'],
  'genre' => $_POST['gener']
];

$dischi[] = $newDisc;

file_put_contents('db.json',json_encode($dischi));

}



?>