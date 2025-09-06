<?php

$archivo = 'inventario.json';

function leerInventario($archivo) {
    if (!file_exists($archivo)) {
        echo "El archivo $archivo no existe.<br>";
        return [];
    }
    $contenido = file_get_contents($archivo);
    $inventario = json_decode($contenido, true); 
    return $inventario ?: [];
}


function ordenarInventario($inventario) {
    usort($inventario, function($a, $b) {
        return strcmp($a['nombre'], $b['nombre']);
    });
    return $inventario;
}


function mostrarResumen($inventario) {
    echo "<h3>Resumen del Inventario</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr>";
    foreach ($inventario as $producto) {
        echo "<tr>";
        echo "<td>{$producto['nombre']}</td>";
        echo "<td>\${$producto['precio']}</td>";
        echo "<td>{$producto['cantidad']}</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}


function valorTotal($inventario) {
    $valores = array_map(function($producto){
        return $producto['precio'] * $producto['cantidad'];
    }, $inventario);
    return array_sum($valores);
}


function productosStockBajo($inventario, $umbral = 5) {
    return array_filter($inventario, function($producto) use ($umbral) {
        return $producto['cantidad'] < $umbral;
    });
}


$inventario = leerInventario($archivo);
$inventario = ordenarInventario($inventario);

mostrarResumen($inventario);

$total = valorTotal($inventario);
echo "<b>Valor total del inventario:</b> \$$total<br>";

$stockBajo = productosStockBajo($inventario);
if (!empty($stockBajo)) {
    echo "<h3>Productos con Stock Bajo (<5 unidades)</h3>";
    foreach ($stockBajo as $producto) {
        echo "- {$producto['nombre']} ({$producto['cantidad']} unidades)<br>";
    }
} else {
    echo "<b>No hay productos con stock bajo.</b><br>";
}
?>
