<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>

<style>
/*
   imaginemos que este archivo php tenemos ua hoja de estilo sencilla con un selector de clase que pretende resaltar un texto.
*/
	.resaltar{
		/*definimos color rojo*/
		color: #F00;
		/*definimos la fuente negrita*/
		font-weight: bold;
	}

	.resaltar_II{
		/*definimos color rojo*/
		color: #F69;
		/*definimos la fuente negrita*/
		font-weight: bold;
	}

</style>

</head>
<body>
<?php

/*
   imaginemos que este archivo php tenemos ua hoja de estilo sencilla con un selector de clase que pretende resaltar un texto.
*/
/*
	para resaltar conforme a la sencilla hoja de estilo, comentamos la línea y la reescribimos utilizando la etiqueta
	de parrafo <p> para definir el estilo <p class="resaltar">
*/
	//echo "<p>Esto es un ejemplo de string</p>";
	/*
		recordemos que no podemos utilizar comillas dobles dentro de comillas dobles, es necesario utilizar comillas simples
		dentro de comillas dobles o viceversa
	*/
	//echo "<p class="resaltar">Esto es un ejemplo de string</p>";

	echo "<p class='resaltar'>Esto es un ejemplo de string</p>";

	/*
		otro modo valido es realizar un escape de caracteres ulilizando la barra invertida dentro del string al inicio y
	 	final de las comillas que se repiten, es decir:
	 */	

	echo " <br><p class=\"resaltar\">Esto es el segundo ejemplo de string</p>";

	/*
		recordemos que en el vídeo 5 vimos como funcionaban de modo diferente las comillas dobles y simples
		al concatenar un texto con una variable; la comilla simple toma la variable como literal y no como variable,
		al contrario de como lo hace la comilla doble.
	 */
		$nombre="María";
		echo "mi nombre es $nombre";
		echo "<br>";
		echo 'mi nombre es $nombre';

	/* tambien podemos resaltar */

		echo '<br><p class=\'resaltar\'>mi nombre es $nombre</p>';

	/*
		en php para comparar dos string utilizaremos:
			strcmp: abreviaturas de string compare para comparar dos string sin diferenciar si son mayusculas o minusculas
			strcasecmp: para comparar dos string teniendo en cuenta si son mayusculas o minusculas
		ambas funciones devuelven "0 false" si los dos string a comparar no coinciden y "1 true" caso de que los dos 
		string a comparar sí coincidan:
	*/

		$string1="guitarra";
		$string2="GUitarrA";

		$result1=strcmp($string1, $string2);
		$result2=strcasecmp($string1, $string2);

		echo "<br> el resultado 1 es: " . $result1;
		echo "<br> el resultado 2 es: $result2";

		echo "<p class='resaltar'>el resultado 1 es: $result1</p>";
		echo "<p class='resaltar'>el resultado 2 es: $result2</p>";

		if ($result1==0) {

			echo "Los dos string comparados $string1 y $string2, sin tener en cuenta las mayusculas, son iguales";

		}else{

			echo "Los dos string comparados $string1 y $string2, sin tener en cuenta las mayusculas, son iguales son diferentes";
		}

		if ($result2==0) {

			echo "<br> <p class='resaltar'>Los dos string comparados $string1 y $string2, teniendo en cuenta las mayusculas, son iguales</p>";

		}else{

			echo "<br> <p class='resaltar'>Los dos string comparados $string1 y $string2, teniendo en cuenta las mayusculas,  son diferentes</p>";;
		}


		$string1="Casa Blanca";
		$string2="ASA";

		echo "<br><br>string1 es: " . $string1;
		echo "<br>string2 es: " . $string2;
		
		$result1=strcmp($string1, $string2);
		$result2=strcasecmp($string1, $string2);
		$result3=strcmp($string2, $string1);
		$result4=strcasecmp($string2, $string1);
		echo "<br>";
		echo "el resultado cmp 1-2 es " . $result1;
		echo "el resultado casecmp 1-2 es $result2 <br>";
		echo "el resultado cmp 2-1 es $result3";
		echo "el resultado casecmp 2-1 es " . $result4;
		echo "<br>";
		echo "<p class='resaltar_II'>el resultado es $result1</p>";
		echo "<p class='resaltar_II'>el resultado es $result2</p>";
		echo "<p class='resaltar_II'>el resultado es $result3</p>";
		echo "<p class='resaltar_II'>el resultado es $result4</p>";

		if ($result1==0) {

			echo "Los dos string comparados $string1 y $string2, sin tener en cuenta las mayusculas, son iguales";

		}else{

			echo "Los dos string comparados $string1 y $string2, sin tener en cuenta las mayusculas, son iguales son diferentes";
		}

		if ($result2==0) {

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string1 y $string2, teniendo en cuenta las mayusculas, son iguales</p>";

		}else{

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string1 y $string2, teniendo en cuenta las mayusculas,  son diferentes</p>";;
		}	

		if ($result3==0) {

			echo "<br> Los dos string comparados $string2 y $string1, sin tener en cuenta las mayusculas, son iguales";

		}else{

			echo "<br> Los dos string comparados $string2 y $string1, sin tener en cuenta las mayusculas, son iguales son diferentes";
		}	

		if ($result4==0) {

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string2 y $string1, teniendo en cuenta las mayusculas, son iguales</p>";

		}else{

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string2 y $string1, teniendo en cuenta las mayusculas,  son diferentes</p>";;
		}

		
		$string1="guitarra";
		$string2="GUitarrA";

		$result1=strcmp($string1, $string2);
		$result2=strcasecmp($string1, $string2);
		$result3=strcmp($string2, $string1);
		$result4=strcasecmp($string2, $string1);

		echo "el resultado cmp 1-2 es " . $result1;
		echo "<br> el resultado casecmp 1-2 es $result2 <br>";
		echo "<br> el resultado cmp 2-1 es $result3";
		echo "<br> el resultado casecmp 2-1 es " . $result4;
		echo "<br>";
		echo "<br> <p class='resaltar_II'>el resultado es $result1</p>";
		echo "<br> <p class='resaltar_II'>el resultado es $result2<br></p>";
		echo "<br> <p class='resaltar_II'>el resultado es $result3</p>";
		echo "<br> <p class='resaltar_II'>el resultado es $result4</p>";

		if ($result1) {

			echo "Los dos string comparados $string1 y $string2, sin tener en cuenta las mayusculas, son iguales";

		}else{

			echo "Los dos string comparados $string1 y $string2, sin tener en cuenta las mayusculas, son iguales son diferentes";
		}

		if ($result2) {

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string1 y $string2, teniendo en cuenta las mayusculas, son iguales</p>";

		}else{

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string1 y $string2, teniendo en cuenta las mayusculas,  son diferentes</p>";;
		}	

		if ($result3) {

			echo "<br> Los dos string comparados $string2 y $string1, sin tener en cuenta las mayusculas, son iguales";

		}else{

			echo "<br> Los dos string comparados $string2 y $string1, sin tener en cuenta las mayusculas, son iguales son diferentes";
		}	

		if ($result4) {

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string2 y $string1, teniendo en cuenta las mayusculas, son iguales</p>";

		}else{

			echo "<br> <p class='resaltar_II'>Los dos string comparados $string2 y $string1, teniendo en cuenta las mayusculas,  son diferentes</p>";;
		}

?>
</body>
</html>