<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/

	function frase($fra){

		echo "<h1><Center>$fra</Center></h1>";

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>

	<?php 

		$i=0;
		do{
			frase("Hola Mundo");
			$i+=1;
		}while($i<2);
		
	 ?>

</body>
</html>