<?php
echo "¿A dónde desea viajar?: <br>";
echo "1) Bariloche - 2) Ushuaia - 3) Cataratas<br>";

$viaje = rand (1, 3);
echo "<br>";
echo "La opción que ingresaste es: ".$viaje;
switch ($viaje) 
{
	case 1:
    case 2:
	echo "Aquí hace frío";
	break;
	default: 
    echo "Aquí hace calor"; 
    break;      
}
?>