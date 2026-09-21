<?php

require_once __DIR__ . "/../libservidorphp/manejaErrores.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";

devuelveJson([
 "nombre" => ["value" => "Johan"],
 "apellido" => ["value" => "Otero"],
 "genero" => ["value" => "pop"],
 "generacion" => ["value" => ""],
 "edad" => ["valueAsNumber" => 23],
 "numero" => ["value" => 7],
 "avance" => ["value" => 70],
 "capacidad" => ["value" => 75],
 "temperatura" => ["valueAsNumber" => 25],
 "aprobado" => ["checked" => true],
 "gracioso" => ["value" => false],
 "emplacado" => ["value" => false],
 "direccion" => ["textContent" => "Girasoles 23\ncolonia Rosales"],
 "encabezado" => ["innerHTML" => "<em>Hola chat, <strong>Johan</strong> aquí"],
 "nacimiento" => ["value" => "2000-07-04"],
 "imagen1" => [
  "src" => "https://puyonexus.com/mediawiki/images/3/38/Nuisance_GD-Rom_puyo4.png"
 ],
 "imagen2" => ["src" => "https://puyonexus.com/mediawiki/images/c/c6/Img184374_l.png", "hidden" => true],
 "pasatiempos[]" => ["chess", "basket"],
 "madrugador" => ["si"],
 "patos[]" => ["hugo", "paco"],
]);
