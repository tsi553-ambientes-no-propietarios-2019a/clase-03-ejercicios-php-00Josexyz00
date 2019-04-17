<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
	function tabla_for($valor){

		echo "Tabla del $valor por for <br>";

		for ($i=1; $i <= 12; $i++) {
			echo($i." * ".$valor." = ".$i*$valor."<br>"); 
		}

	}

	function tabla_while($valor){

		echo "Tabla del $valor por while <br>";

		$i=1;

		while ( $i<= 12) {
			echo($i." * ".$valor." = ".$i*$valor."<br>");
			$i+=1;
		}

	}

	function tabla_do($valor){

		echo "Tabla del $valor por do <br>";

		$i=1;

		do{ 
			echo($i." * ".$valor." = ".$i*$valor."<br>");
			$i+=1;
		}while($i<= 12);

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		tabla_for(2);
		tabla_while(2);
		tabla_do(2);
	?>
	
</body>
</html>>