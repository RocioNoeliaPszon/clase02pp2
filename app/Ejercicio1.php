<?php
echo "Su edad es: ";
echo $edad = rand (1, 70);

echo "<br>";

if ($edad <= 18)
{
	echo $edad. "años, usted es menor";
}
else 
{
	echo $edad. "años, usted es mayor";
}
?>