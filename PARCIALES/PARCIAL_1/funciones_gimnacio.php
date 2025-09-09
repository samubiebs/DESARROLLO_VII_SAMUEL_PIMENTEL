<?php
function calcular_promocion($antiguedad_meses) {
    if ($antiguedad_meses < 3) {
        return 0;
    } elseif ($antiguedad_meses (3 && 12 )) {
        return $antiguedad_meses * 0.08;
    } elseif ($antiguedad_meses >= 24) {
        return $antiguedad_meses * 0.20;
    } else {
        return $antiguedad_meses * 0.15;
    }
}

function aplicar_impuesto($subtotal) {
    return $subtotal * 0.07;
}

function calcular_total($subtotal, $descuento, $impuesto) {
    return $subtotal - $descuento + $impuesto;
}
?>