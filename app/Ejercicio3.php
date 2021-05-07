<?php
echo "Ingrese un número del 1 al 12: ";
echo $mes = rand (1, 12);
echo "<br>";
echo "El número corresponde a la estación: ";

if ($mes == 12||$mes == 1||$mes == 2||$mes == 3)
{
	echo "Verano";
}
else if($mes == 4||$mes == 5||$mes == 6)
{
	echo "Otoño";
}
else if($mes == 7||$mes == 8)
{
	echo "Invierno";
}
else 
{
	echo "Primavera";
}
?>