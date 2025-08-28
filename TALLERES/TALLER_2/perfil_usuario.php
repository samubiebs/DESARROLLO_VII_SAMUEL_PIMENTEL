<?php

$nombre_completo = "Samuel Pimentel";
$edad = 30;
$correo = "samuel.pimentel@utp.ac.pa";
$telefono = "6368-7024";


define("OCUPACION", "Estudiante de Desarrollo de Software");


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
