<?php  
echo "Ingrese su edad: ";
echo $suEdad = rand (1, 80);
echo "<br>";
echo "La edad ingresada es: ".$suEdad;

switch ($suEdad) {
   case 1;
   case 2;
   case 3;
   case 4;
   case 5;
   case 6;
   case 7;
   case 8;
   case 9;
   case 10;
   case 11;
   echo "Menor a de 12 años: Usted es menor de edad";
   break;
   case 13;
   case 14;
   case 15;
   case 16;
   case 17;
   echo "Entre 12 y 18 años: Usted es adolescente";
  break;
  default:
        echo "Usted es mayor de edad";  
   }
?>