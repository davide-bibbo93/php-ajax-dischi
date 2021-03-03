<?php
// il file server.php è il file che deve interrogare tramite axios.

require_once __DIR__ . '/../database/database.php';

// variabile che cattura il valore di "genre" passato in $_GET
$genreQuery = $_GET['genre'];

// funzione che filtra gli album per genere, generando di volta in volta un nuovo array
function filterByGenre($sourceArray, $genre) {

  $filtered = [];

  foreach($sourceArray as $album) {

    if($album['genre'] === $genre){
      array_push($filtered, $album);
    }

  }
  return $filtered;
}

// se il valore in $_GET non è vuoto, chiamo la funziona che filtra per genere
if(!empty($genreQuery)){
  $discs = filterByGenre($discs, $genreQuery);
}

header('Content-Type: application/json');
// si farà il json encode del mio database.
echo json_encode($discs);
