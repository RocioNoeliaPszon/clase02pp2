<?php
echo "Ingrese el precio neto del producto:$ ";
echo $art = rand (1, 500);

$iva = 1.21;
echo "<br>";

$resultado = $art*$iva;

echo "El precio del producto + IVA es:$ ";
echo $resultado;
echo "<br>";
?>