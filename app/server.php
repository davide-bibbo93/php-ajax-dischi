<?php
// il file server.php è il file che deve interrogare tramite axios.
// si farà il json encode del mio database.

require_once __DIR__ . '/../database/database.php';

$genreQuery = $_GET['genre'];

function filterByGenre($sourceArray, $genre) {

  $filtered = [];

  foreach($sourceArray as $album) {

    if($album['genre'] === $genre){
      array_push($filtered, $album);
    }

  }
  return $filtered;
}

if(!empty($genreQuery)){
  $discs = filterByGenre($discs, $genreQuery);
}

header('Content-Type: application/json');
echo json_encode($discs);
