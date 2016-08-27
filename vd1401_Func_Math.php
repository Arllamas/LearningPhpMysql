<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php

/* 
	Podemos encontrar un listado de las funciones matemáticas de php on un buscador se recomienda la página php.net;
	en la misma viene la relación y pinchando en cada funcion podemos ver la descripción parámetros y opciones;

	Vamos a mostrar algunas de las mas frecuentes. rand, round, paw, etc.
*/

$num1=rand();
$num2=rand(0,10);

echo "<br> El número aleatorio obtenido sin indicar límites es: $num1";
echo "<br> El número aleatorio obtenido indicando límites entre 0 y 10 es: $num2 <br>";


$num3=rand(1,5);
$num4=pow($num2, $num3);
$num5=($num1/$num3);
$num6=round($num5);
$num7=round($num1/$num3,3);

echo "<br> El número aleatorio obtenido indicando límites entre 0 y 5 es: $num3 <br>";
echo "<br> El resultado de elevar $num2 a la $num3 ª es: $num4 <br>";
echo "<br> El resultado de dividir $num1 entre $num2 es: $num5 <br> 
	 redondeando por defecto con 0 decimales, el resultado de la división anterior es: $num6 <br>
	 y redondeando por defecto con 3 decimales, el resultado de la división anterior es: $num7 <br>";


?>





</body>
</html>