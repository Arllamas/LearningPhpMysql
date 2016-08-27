<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/* el nombre de las constantes:
	- se escribe siempre por convención en MAYUSCULAS y debemos respetar esta norma como buena práctica que facilitará
	  la interpretación del cogigo por nosotros mismos y por otros.
	- No debe llevar el simbolo $
	- es obligatorio definirlas mediante la función define(Nombre, valor, ^[true ó false]) el tercer argumento no es obligatorio
	- por defecto al definir una constante, su ámbito es global
	- las constantes no se pueden redefinir ni sobrecribir
	- Solo pueden almacenar valores escalares, es devir valores que no se pueden dividir en partes, por ejemplo no se puede
	  almacenar un array en una constante; si un entrero, un decimañ, un string, un booleano, pero no un array
*/
	
	define("AUTOR", "Antonio");
	echo AUTOR;
	echo "<br>";
	/* a diferencia de las variables, las constantes no admiten concatenación directa dentro de las comillas de un texto */
	echo "el nombre del autor es: AUTOR";
	echo "<br>";
	/* es necesario concatenar del siguiente modo:*/
	echo "El nombre del autor es: " . AUTOR;
	/* si escribimos el nombre de la constante en minuscula, da un error, no porque no se pueda definir una constante con su
	 	nombre en minusculas, ya que la mayuscula es por convención, sino porque no se ha definido dicha variable*/
	echo "<br>";
	echo "El nombre del autor es: " . autor;
	echo "<br>";
	/* podemos utilizar el tercer argumento de define() para indicar que sea insensible a mayúsculas y minúsculas,
		por ejemplo, para evitar errores provocados por malas prácicas de otros desarrolladores, en cuyo caso: */
	define("AUTOR_2", "María", true);
	echo "el segundo autor es: " . autor_2;
	echo "<br>";
	/* no es posible redefinir una constante, dará un mensaje de error*/
	define("AUTOR", "Antonio Rafael");
	echo "El nombre del autor es: " . AUTOR;
	echo "<br>";
	/* Sin embargo al utilizar el true, si redefinimos la constante sin el true, interpretará que son dos constantes
		distintas, la del true como si fuera minúscula y la otra solo la reconocerá como mayúscula */
	define("AUTOR_2", "María Fernanda");
	echo "el segundo autor es: " . autor_2;
	echo "<br>";
	echo "el segundo autor es: " . AUTOR_2;
	echo "<br>";


/*
	Al igual que otros lenguajes, PHP viene con un montón de constantes predefinidas que podemos encontrar
	escribiendo en cualquier buscador como google "constantes de php", se recomienda a página php.net
	porque tiene incluso un manual en español. vienen con el nombre en mayuscula pero precedido y seguido 
	por dos guiones bajo, por ejemplo: __LINE__; __FILE__; __DIR__; etc.

	Los valores de estas constantes se recuperan invocandolas;
*/
	echo "estamos en la linea del programa: " . __LINE__;
	echo "<br>";
	echo "el archivo actual es: " . __FILE__;
	echo "<br>";



?>
</body>
</html>