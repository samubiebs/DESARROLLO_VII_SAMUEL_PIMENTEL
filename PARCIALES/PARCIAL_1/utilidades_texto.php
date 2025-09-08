<?php
function contar_palabras($texto) {
    return str_word_count($texto);
}

function contar_vocales($texto) {
    return preg_match_all('/[aeiou]/i', $texto);
}

function invertir_palabras($texto) {
    $palabras = explode(" ", $texto);
    $invertidas = array_reverse($palabras);
    return implode(" ", $invertidas);
}
?>
