<?php
$albumList = file_get_contents('./assets/json/album.json');

$album = json_decode($albumList, true);

// COVERSIONE JS
header('Content-type: application/json');

echo json_encode($album);