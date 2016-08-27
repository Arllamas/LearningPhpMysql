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
	 redondeando, por defecto sin decimales, el resultado de la división anterior es: $num6 <br>
	 y redondeando a un máximo de 3 decimales, el resultado de la división anterior es: $num7 <br>";

echo "<br><br>*************************************************************************************<br>";
echo "<br>*************************************************************************************<br><br>";

/* EL CASTING  es php es mas sencillo que en otros lenguajes porque php cuenta con lo que se conoce como CASTING IMPLICITO;
 	al contrario de lo que ocurre en java donde el manejo de tipos es mucho mas complejo, php tiene un manejo de tipos
 	bastante sencillo. Por ejemplo mientras otros lenguajes a la hora de definir una variable obligan a declarar el
 	tipo de dato que contendrá esa variable, en php eso como hemos visto no es así con lo que se simplifica su manejo porque
 	la asignación de tipos en php se realiza dinámicamente se asume el tipo en función del contexto, por ejemplo */

 $var1="8";
 echo "<br> El valor de la variable 1 es: $var1 tipo " . gettype($var1), "\n<br>";
 
// $var1 adopta el tipo String

 $var2=8;
 echo "<br> El valor de la variable 2 es: $var2 tipo " . gettype($var2), "\n<br>";
 
 // $var2 adopta el tipo Integre o entero

 $var3=8.73;
 echo "<br> El valor de la variable 3 es: $var3 tipo " . gettype($var3), "\n<br>";
 
 // $var3 adopta el tipo double o decimal

 $var4=$var1+$var2;
 echo "<br> El valor de la variable 4, suma de las variables 1 (tipo string) y 2 (tipo integer): $var1 + $var2 = " . ($var1 + $var2) . " es  tipo " . gettype($var4), "\n <br>";

 // $var4 adopta el tipo integre

 echo "<br> ahora el valor de la variable 2, suma de las variables 2 (tipo integer) y 3 (tipo double): $var2 + $var3 = " . ($var2 + $var3) . " es tipo " . gettype($var3), "\n <br>";
 $var2=$var2+$var3;
 // ahora $var2 adopta el tipo double

 $var4=$var1+$var2;
 echo "<br> ahora el valor de la variable 4, suma de las variables 1 (tipo string) y 2 (ahora tipo double): $var1 + $var2 = " . ($var1 + $var2) . " es tipo " . gettype($var4), "\n <br>";
  
 // y ahora $var4 adopta el tipo double
?>

</body>
</html>