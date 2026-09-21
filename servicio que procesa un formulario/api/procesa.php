<?php

require_once __DIR__ . "/../libservidorphp/recibeTexto.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";

$saludo = recibeTexto("saludo");
$nombre = recibeTexto("nombre");
$resultado = "{$saludo} {$nombre}.";
devuelveJson($resultado);
