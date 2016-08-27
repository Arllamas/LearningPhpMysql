<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*
	EN ESTE SEGUNDO TEMA DE FUNCIONES VAMOS A HABLAR DEL PASO DE PARÁMETROS POR VALOR Y PASO DE VALOR POR REFERENCIAS EN PHP.
	EN LA SINTAXIS SOLO SE DIFERENCIA UN PARAMETRO QUE SE PASA POR VALOR DE UNO QUE SE PASA POR REFERENCIA EN QUE EL PRIMERO
	SE ESCRIBE SOLO EL NOMBRE DEL PARÁMETRO PRECEDIDO POR EL SIGNO DE DOLAR $ COMO CUALQUIER OTRA VARIABLE, ES DECIR $nameParam; 
	POR EL CONTRARIO, CUANDO EL PARAMETRO SE PASA POR REFERENCIA EL SIGNO DE DOLAR $ VA ADEMAS PRECEDIDO POR EL SIGNO AMPERSAND &,
	ES DECIR &$nameParam

	FUNCIONALMENTE, CUANDO UN PARÁMETRO SE PASA POR REFERENCIA, CUALQUIER CAMBIO DEL VALOR DE ESE PARÁMETRO SE MANTIENE FUERA DE LA FUNCIÓN.

	VEAMOS COMO ES ESTO CON ALGUNOS EJEMPLOS:
*/

	function incrementa($num){
		$num++;
		return $num;
	}
		
	echo "Llamamos a la función incrementa pasando como argumento el valor 5 y obtenemos el valor: " . incrementa(5) . "<br><br>";
	
	$argu1=5;
	echo "Definimos una variable a la que damos el mismo valor: $argu1; pasamos la variable como argumento y obtenemos: "
	 . incrementa($argu1) . "<br><br>";
	echo "Comprobamos que después de ejecutar la función la variable mantiene el valor: $argu1 <br><br>";

	/*
		La función no sabe nada de lo que hay fuera de la función y en consecuencia no conoce la variable $argu1,
		recibe su valor como argumento y realiza un cálculo con él devolviendo el resultado.

		veamos ahora que ocurre cuando la función la definimos pasando los parámetros por referencia:
	*/
	function incrementa2(&$num){
		$num++;
		return $num;
	}

	echo "Definimos una nueva function que vamos a llamar incrementa2() idéntica a incrementa() pero a la que pasamos
	 el parámetro por referencia anteponiendole el signo &<br><br>";
	//solo las variables pueden ser pasadas por referencia
	//echo "Llamamos a la función incrementa2() pasando como argumento el valor 7 y obtenemos el valor: " . incrementa2(7) . "<br><br>";
	
	$argu1=7;
	echo "Definimos una variable a la que damos el mismo valor: $argu1; pasamos la variable como argumento y obtenemos: "
	 . incrementa2($argu1) . "<br><br>";
	echo "Comprobamos que después de ejecutar la función la variable no mantiene el valor 7, ahora la variable vale: $argu1 <br><br>";
	/*
		ahora al pasar el parámetro &$num1 por referencia mediante la variable $argi1 se ha creado un vínculo y ahora la función
		sí sabe que hay fuera de ella una variable $argu1 cuyo valor toma como parametro, realiza su cálculo y se actualiza su valor
		que sale fuera de la función para proseguir la ejecución del programa con un nuevo valor de la variable $argu1.
	*/

echo "***************************************************************************************<BR>";
echo "Veamos otro ejemplo de función con paso de parametros por valor y por referencia<br>";
echo "***************************************************************************************<BR><BR>";

function cambia_mayusc($param){
	$param=strtolower($param);
	$param=ucwords($param);
	return $param;
}
function cambia_mayusc1(&$param){
	$param=strtolower($param);
	$param=ucwords($param);
	return $param;
}

echo "definimos una nueva función cambia_mayusc() que transforma un string en minuscula con las primeras letras de todas las palabras en mayúscula<br><br>";
$cadena="hOLA munDo";
echo "le pasamos como parámetro la variable cadena con el Valor: $cadena<br><br>";
echo "el resultado obtenido es:  " . cambia_mayusc($cadena) . "<br><br>";
echo "observamos que el valor de la variable cadena que hemos pasado como parámetro sigue siendo:  $cadena<br><br>";
echo "***************************************************************************************<BR><br>";
echo "definimos una segunda función cambia_mayusc1() idéntica pero que recibe el parámetro por referencia, anteponemos &<br><br>";
$cadena="hOLA munDo";
echo "le pasamos como parámetro la misma variable cadena con el mismo Valor: $cadena<br><br>";
echo "el resultado obtenido es:  " . cambia_mayusc($cadena) . "<br><br>";
echo "observamos ahora que el valor de la variable cadena que hemos pasado como parámetro ha cambiado:  $cadena$cadena<br><br>";
?>
</body>
</html>