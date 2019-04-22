<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
	function Tiene_vocales($palabra){

		//$Tiene_cinco_Vocales =[];

		strtolower($palabra);//trasforma palabras mayúsculas en minúsculas

		$num_a=0;
		$num_e=0;
		$num_i=0;
		$num_o=0;
		$num_u=0;

		echo "La palabra es : ".$palabra.".<br>";
		echo "Tiene ".strlen($palabra)." letras."."<br>";

		for ($i=0; $i <strlen($palabra); $i++) {

			$letra=substr($palabra,$i,1);//obtiene una letra de la palabra-----estructura   subtr(variable,punto inicio, numero de letras que toma desde esta posicion)

			//condicion($letra);
		
			if($letra == 'a'|| $letra == 'á'){
				$num_a++;
			}
			if ($num_a == 2 ) {
				echo "hay mas de 2 :--- a --- en la palabra. <br>";
				break;
			}
			//----------------
						
			if($letra == 'e'|| $letra == 'é'){
				$num_e++;
				echo "pasa";
			}
			if ($num_e == 2 ) {
				echo "hay mas de 2 :--- e --- en la palabra. <br>";
				break;
			}
			//----------------
			
			if($letra == 'i'|| $letra == 'í'){
				$num_i++;
			}
			if ($num_i == 2 ) {
				echo "hay mas de 2 :--- i --- en la palabra. <br>";
				break;
			}
			//----------------
			
			if($letra == 'o'|| $letra == 'ó'){
				$num_o++;
			}
			if ($num_o == 2 ) {
				echo "hay mas de 2 :--- o --- en la palabra. <br>";
				break;
			}
			//----------------

			if($letra == 'u'|| $letra == 'ú'){
				$num_u++;
			}
			if ($num_u == 2 ) {
				echo "hay mas de 2 :--- u --- en la palabra. <br>";
				break;
			}


		}
		if($num_a==1 && $num_e==1 && $num_i==1 && $num_o==1 && $num_u==1){
			echo "La palabra contine todas las vocales.";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 5</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php 

		Tiene_vocales("Murciélago");

	 ?>
	
</body>
</html>