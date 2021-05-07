<?php
function Sumar ($N1, $N2) {

	$Suma = $N1 + $N2;
	return $Suma;

}
function Dividir ($N1, $N2) {

	$Division = $N1/$N2;
	return $Division;
}

function returnIn0 ($Numero) {

	if ($Numero == 0) {
		return true;
	}
	else {
		return false;
	}
}

function Calcular ($N1, $N2, $Operador){
	switch ($Operador) {
		case '+': 
		Resultado (Sumar ($N1, $N2));
		break;
		case '/':
		if (!ReturnIn0 ($N2)) {
			Resultado (Dividir ($N1, $N2));
		} else {
			echo "No puede dividirse por 0";
		}
		break;
		case '$':
		echo "Es válido";
		break;
		}
	}
	function Resultado ($Resultado) {
		echo "El resultado de la operación es $Resultado";
	}
}
?>