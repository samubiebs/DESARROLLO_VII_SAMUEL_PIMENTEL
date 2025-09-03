<?php

$texto = "Hola Mundo desde PHP";
echo "Texto original: $texto</br>";


echo "Extracto 1 (0-4): " . substr($texto, 0, 4) . "</br>";


echo "Extracto 2 (5-fin): " . substr($texto, 5) . "</br>";


echo "Extracto 3 (últimos 5): " . substr($texto, -5) . "</br>";


$nombreCompleto = "Samuel Pimentel Pita";
$nombre = substr($nombreCompleto, 0, strpos($nombreCompleto, " "));
$apellido = substr($nombreCompleto, strrpos($nombreCompleto, " ") + 1);
echo "</br>Nombre completo: $nombreCompleto</br>";
echo "Nombre: $nombre</br>";
echo "Apellido: $apellido</br>";


function ocultarTarjeta($numeroTarjeta, $visible = 4) {
    $longitud = strlen($numeroTarjeta);
    return str_repeat("*", $longitud - $visible) . substr($numeroTarjeta, -$visible);
}

$tarjeta = "1234567890123456";
echo "</br>Número de tarjeta original: $tarjeta</br>";
echo "Número de tarjeta oculto: " . ocultarTarjeta($tarjeta, 6) . "</br>";


function extraerDominio($email) {
    return substr($email, strpos($email, "@") + 1);
}

$correo = "samuel@gmail.com";
echo "</br>Correo: $correo</br>";
echo "Dominio: " . extraerDominio($correo) . "</br>";


function extraerEntre($texto, $inicio, $fin) {
    $inicioPos = strpos($texto, $inicio);
    if ($inicioPos === false) return "";
    
    $inicioPos += strlen($inicio);
    $finPos = strpos($texto, $fin, $inicioPos);
    if ($finPos === false) return "";
    
    return substr($texto, $inicioPos, $finPos - $inicioPos);
}

$textoHTML = "<h1>Bienvenidos al Taller</h1>";
echo "</br>Texto HTML: $textoHTML</br>";
echo "Contenido extraído: " . extraerEntre($textoHTML, "<h1>", "</h1>") . "</br>";


$frase = "Aprendiendo PHP";
$ultimos3 = substr($frase, -3);
$primeros5 = substr($frase, 0, 5);
echo "</br>Frase: $frase</br>";
echo "Primeros 5 caracteres: $primeros5</br>";
echo "Últimos 3 caracteres: $ultimos3</br>";
echo "Longitud total de la frase: " . strlen($frase) . "</br>";
?>
