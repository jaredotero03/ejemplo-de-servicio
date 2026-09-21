<?php

require_once __DIR__ . "/../libservidorphp/recibeJson.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";

$json = recibeJson();
$saludo = $json->saludo;
$nombre = $json->nombre;
$resultado = "{$saludo} {$nombre}.";
devuelveJson($resultado);
