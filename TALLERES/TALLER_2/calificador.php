<?php


$calificacion = 85; 


$letra = '';


$resultado = '';


if ($calificacion >= 90) {
    $letra = 'A';
} elseif ($calificacion >= 80) {
    $letra = 'B';
} elseif ($calificacion >= 70) {
    $letra = 'C';
} elseif ($calificacion >= 60) {
    $letra = 'D';
} else {
    $letra = 'F';
}


echo "Tu calificación es $letra <br>";


$resultado = ($calificacion >= 60) ? 'Aprobado' : 'Reprobado';


echo "Resultado: $resultado <br>";

switch ($letra) {
    case 'A':
        echo "¡Excelente trabajo! 🥳";
        break;
    case 'B':
        echo "¡Buen trabajo! 👍";
        break;
    case 'C':
        echo "Trabajo aceptable. 🙂";
        break;
    case 'D':
        echo "Necesitas mejorar. 😟";
        break;
    case 'F':
        echo "Debes esforzarte más. 😢";
        break;
}

?>