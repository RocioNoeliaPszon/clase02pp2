	<?php
	echo "<h1>Bienvenidos</h1>";
		//echo rand(1, 70);

		//$edad=15;
		$edad=rand(1,70);
		/*
		if($edad<13){
			echo $edad. " Es menor";
		}
		if($edad>12 && $edad<18){
		echo $edad. " Es adolescente";
		}
		if($edad>17){
		echo $edad. " Es mayor";
		}
		*/
		if ($edad<13){
			echo $edad. "Es menor";
		}
		else
		{
			if($edad>17)
			{
				echo $edad. "Es mayor";
			}
			else
			{
				echo $edad. "Es adolescente";
			}
		}
	?>
