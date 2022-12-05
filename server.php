<?php 
header('Content-Type: application/json');
$string =  file_get_contents('db.json');
$dischi = json_decode($string,true);

echo json_encode($dischi);

$random = rand(1990, 2022);

if (isset($_POST['title'])) {

$newDisc = [
  'title' => $_POST['title'],
  'author' => 'Bon Jovi',
  'year' =>  $random,
  'poster' => 'https://zerojackerzz.com/wp-content/uploads/2019/10/album-placeholder.png',
  'genre' => 'Rock'
];

$dischi[] = $newDisc;

file_put_contents('db.json',json_encode($dischi));

}



?>