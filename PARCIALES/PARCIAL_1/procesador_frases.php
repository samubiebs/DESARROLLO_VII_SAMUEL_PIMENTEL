<?php
include "utilidades_texto.php";

$frases = [
    "Frase Uno",
    "Frase Dos",
    "Frase Tres"
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Analisis de Texto</title>
</head>
<body>
    <h2>Resultados</h2>
    <table border="1">
        <tr>
            <th>Frase</th>
            <th>Palabras</th>
            <th>Vocales</th>
            <th>Invertida</th >
        </tr>
        <?php foreach($frases as $frase): ?>
        <tr>
            <td><?php echo $frase; ?></td>
            <td><?php echo contar_palabras($frase); ?></td>
            <td><?php echo capitalizar_palabras($frase); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
