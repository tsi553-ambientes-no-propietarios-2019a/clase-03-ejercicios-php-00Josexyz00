<?php

/**
 Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:

$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.

Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.

Para imprimir el contenido de una variable también utilizamos el comando echo:

echo $num;
 */

	function aleatoria(){

		$num=rand(1,100);
		return $num;

	}

	function Mayor_Menor($aleato){

		if ($aleato<50) {

			echo "El número es menor a 50";
			
		}elseif ($aleato==50) {

			echo "El número es igual a 50";
			
		}else{

			echo "El número es mayor a 50";

		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <center> Ejercicio 5 </center></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php 

		$numAlea=aleatoria();
		echo "El numero es = ".$numAlea."<br>";
		Mayor_Menor($numAlea);


	 ?>
	
</body>
</html>