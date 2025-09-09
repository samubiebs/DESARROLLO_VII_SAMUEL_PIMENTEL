<?php

function contar_palabras_repetidas($texto) {
    return str_word_count($texto);
}


function capitalizar_palabra($texto) {
    $palabras = explode(" ", $texto);
    $palabraEnMinusculas = strtolower($texto);

    $capitalizado = array_reverse($palabras);
    return implode(" ", $capitalizado);
}
?>
