<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>

<?php
/* 	Prioridad de ejecución de los operadores y el Copndicional IF*/

/*
	operadores lógicos: 
	- AND y && : "Y Lógico", pero no tienen la misma prioridad
	- OR y || : "O Lógico", tampoco tienen la misma prioridad
	- XOR "OR Exclusivo", 
	- ! y NOT Negación

	Todos sabemos que 2+3*6=20 porque la prioridad del operador suma es inferior a la del operador multiplicación,
	si fuera al contrario, el resultado no sería 20 sino 30. sin embargo con los paréntesis podemos modificar la prioridad
	ya que el interior de los paréntesis tiene mas prioridad, por eso (2+3)*6=30

	A la hora de programar, hemos de tener en cuenta la prioridad entre los distintos operadores, aritméticos, de asignación, lógicos,
	bit a bit, de control de errores, etc. en google buscando operadores php, en www.php.net encontraremos un botón en el que podremos
	consultar la PRECEDENCIA o prioridad en la ejecución de todos los operadores. Veamos algunos ejemplos: 
		- el operador && tiene mas prioridad que el operador =, y por tanto se ejecuta antes; por el contrario, el Operador AND segun
		  la tabla de prioridades de php, tiene menos prioridad que el operador && incluso menos prioridad que el operador igual,
		  es decir ADN se ejecuta despues que el operador igual. Veamos con el siguiente ejemplo las consecuencias:
*/

$var1=true;
$var2=false;

$result1=$var1 && $var2;
$result2=$var1 AND $var2;


//echo "<br>el resultado con el operador && es: " . $result1;
//echo "<br><br>el resultado con el operador AND es: " . $result2;

if ($result1==true){
	echo "<br>el resultado de este condicional al utilizar el operador $$ es: CORRECTO<br>";
}else{
	echo "<br>el resultado de este condicional al utilizar el operador $$ es: FALSO<br>";
}

if ($result2==True){
	echo "<br>el resultado del mismo condicional al utilizar el operador AND es: CORRECTO<br>";
}else{
	echo "<br>el resultado del mismo condicional al utilizar el operador AND es: FALSO<br>";
}

echo "<br><br>EN ESTA CIRCUNSTANCIA CONCRETA NO ES LO MISMO UTILIZAR UN OPERADOR $$ QUE UN OPERADOR AND AUNQUE LOS DOS SON Y LÓGICOS.";
echo "<br>EN OTROS MUCHOS CASOS NOS PODRÁ DAR IGUAL UTILIZAR $$ QUE UTILIZAR AND, DEPENDERÁ DEL RESTO DE OPERADORES CON LOS QUE SE COMBINE.";

echo "<br><br> LA PRECEDENCIA O PRIORIDAD DE LOS OPERADORES ES MUY IMPORTANTE PARA ENTENDER LOS RESULTADOS DE NUESTROS PROGRAMAS";

?>	
</body>
</html>