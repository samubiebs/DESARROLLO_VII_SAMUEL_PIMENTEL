<?php
$misComidas = ["Pizza", "Tacos", "Ensalada", "Sushi", "Helado"];

$comidasAmigo = ["Hamburguesa", "Pizza", "Pasta", "Sushi", "Chocolate"];

echo "<h3>Mis comidas favoritas:</h3>";
print_r($misComidas);

echo "<h3>Comidas favoritas de mi amigo:</h3>";
print_r($comidasAmigo);


$comidasCombinadas = array_merge($misComidas, $comidasAmigo);
echo "<h3>Combinación de ambas listas:</h3>";
print_r($comidasCombinadas);


$comidasSinDuplicados = array_unique($comidasCombinadas);
echo "<h3>Comidas combinadas sin duplicados:</h3>";
print_r($comidasSinDuplicados);


sort($comidasSinDuplicados);
echo "<h3>Comidas ordenadas alfabéticamente:</h3>";
print_r($comidasSinDuplicados);


$comidasEnComun = array_intersect($misComidas, $comidasAmigo);
echo "<h3>Comidas que ambos disfrutan:</h3>";
print_r($comidasEnComun);


$soloMisComidas = array_diff($misComidas, $comidasAmigo);
$soloComidasAmigo = array_diff($comidasAmigo, $misComidas);

echo "<h3>Comidas que solo me gustan a mí:</h3>";
print_r($soloMisComidas);

echo "<h3>Comidas que solo le gustan a mi amigo:</h3>";
print_r($soloComidasAmigo);
?>

      
