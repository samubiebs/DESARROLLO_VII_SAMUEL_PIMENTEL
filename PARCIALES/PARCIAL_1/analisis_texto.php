<?php
include "utilidades_texto.php";

$frases = [
    "Samuel Pimentel",
    "Hoy tengo mi primer examen parcial",
    "No se que pase con mi vida hoy"
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
            <td><?php echo contar_vocales($frase); ?></td>
            <td><?php echo invertir_palabras($frase); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
