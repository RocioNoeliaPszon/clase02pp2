<?php
	$numero1 = rand(1, 100);
	$numero2 = rand(1, 100);
	$numero3 = rand(1, 100);
	echo "El primer número es: $numero1 <br>";
	echo "El segundo número es: $numero2 <br>";
	echo "El tercer número es: $numero3 <br><br>";

	if ($numero1 <> $numero2 && $numero1 <> $numero3 && $numero2 <> $numero3){

		if (($numero1 > $numero2 && $numero1 < $numero3) || ($numero1 < $numero2 && $numero1 > $numero3)){
			$numero = $numero1;
		}else{
				if (($numero2 > $numero1 && $numero2 < $numero3) || ($numero2 < $numero1 &&  $numero2 > $numero3)){
					$numero = $numero2;
			} else 	{
				if (($numero3 > $numero1 && $numero3 < $numero2) || ($numero3 < $numero1 && $numero3 > $numero2)){
                	$numero = $numero3;					
					}
			}
		}
		$numero;
		echo "$numero1, $numero2, $numero3 El número del medio es: $numero";
	}else{
		echo "$numero1, $numero2, $numero3 No tiene";
	}
?>