<?php
// il file server.php è il file che deve interrogare tramite axios.
// si farà il json encode del mio database.

require_once __DIR__ . '/../database/database.php';

header('Content-Type: application/json');
$jason = json_encode($discs);
echo $jason;
