<?php
echo "Ingrese el primer número: ";
echo $num1 = rand (1, 100);
echo "<br>";
echo "Ingrese el segundo número: ";
echo $num2 = rand (1, 100);
echo "<br>";
echo "Ingrese el tercer número: ";
echo $num3 = rand (1, 100);
echo "<br>";


if ($num1 > $num2 && $num1 > $num3)
	{
		$numMayor = $num1;
	}
	else if ($num2 > $num3)
	{		
		$numMayor = $num2;
	}
	else 
	{
		$numMayor = $num3;
	}
    echo "El número más grande es: ".$numMayor;
?>