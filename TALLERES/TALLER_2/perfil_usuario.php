<?php

$nombre_completo = "";
$edad = 30;
$correo = "";
$telefono = "";


define("OCUPACION", "");


echo "Nombre completo: " . $nombre_completo . "<br>";
print "Edad: $edad<br>";
printf("Correo: %s<br>", $correo);
echo "Teléfono: $telefono<br>";
echo "Ocupación: " . OCUPACION . "<br>";


var_dump($nombre_completo);
var_dump($edad);
var_dump($correo);
var_dump($telefono);
var_dump(OCUPACION);
?>
