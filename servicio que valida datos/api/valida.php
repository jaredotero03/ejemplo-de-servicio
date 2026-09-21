<?php

require_once __DIR__ . "/../libservidorphp/manejaErrores.php";
require_once __DIR__ . "/../libservidorphp/BAD_REQUEST.php";
require_once __DIR__ . "/../libservidorphp/recibeTexto.php";
require_once __DIR__ . "/../libservidorphp/ProblemDetailsException.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";

$saludo = recibeTexto("saludo");
$nombre = recibeTexto("nombre");

if (
 $saludo === false
 || $saludo === ""
)
 throw new ProblemDetailsException([
  "status" => BAD_REQUEST,
  "title" => "Falta el saludo.",
  "type" => "/erros/faltasaludo.html"
 ]);

if (
 $nombre === false
 || $nombre === ""
)
 throw new ProblemDetailsException([
  "status" => BAD_REQUEST,
  "title" => "Falta el nombre.",
  "type" => "/errors/faltanombre.html"
 ]);

$resultado = "{$saludo} {$nombre}.";

devuelveJson($resultado);
