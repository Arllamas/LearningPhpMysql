<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*
	Las Funciones permiten automatizar tareas y de este modo se evita repetir codigo en un programa; tareas que se realizan con frecuencia,
	basta con utilizar el código de la función ya definida y no es necesario volver a escribirlo. podemos diferenciar dos tipos de funciones:
		-FUNCIONES PREDEFINIDAS: propias de php; podemos encontrar una relación y estudiar su compertamiento y utilidad incluso con ejemplos
		en php.net 
		-FUNCIONES PROPIAS: son las definidas por los usuarios

	Veremos aquí funciones anidadas, paso de parámetros. el parámetro por defecto
	comenzamos viendo ejemplos de utilización de funciones predefinidas en nuestro ejemplo utilizamos strtolower(), strtoupper(), ucfirst(),
	ucwords():
*/
echo "*************************<BR>";
echo "EJEMPLO DE FUNCIONES PREDEFINIDAS<br>";
echo "*************************<BR><BR>";

$frase="NUeStra primERA FrasE pAra tRAbaJar FunctionS";
echo (strtolower($frase)) . " - strtolower(str)<br>";
echo (strtoupper($frase)) . " - strtoupper(str)<br>";
$frase=strtolower($frase);
echo (ucfirst($frase)) . " - ucfirt(str)<br>";
$palabra="antonio";
echo (ucwords($frase)) . " - ucwords(str)<br>";
echo (ucwords($palabra)) . " - ucwords(str)<br>";
$palabra="antonio rafael";
echo (ucwords($palabra)) . " - ucwords(str)<br>";
/*
	una función no hace su trabajo hasta que no se la llama; se llamam a una función escribiendo su nombre y proporcionandole
	los argumentos necesarios. estos argumentos pueden ser uno varios o ninguno. es conveniente antes de usar una function
	consultar su funcionanmiento en php .net
*/
echo "*************************<BR>";
echo "EJEMPLO DE FUNCIONES PROPIAS<br>";
echo "*************************<BR><BR>";
/*
	La palabra reservada para definir una función es FUNCTION y a continuación se escribe en mayusculas el nombre de la función y 
	entre paréntesis los argumentos que va a necesitar separados por comas, para terminar escribiendo entre llaves el código
	que debe realizar la función cuando se la invoque. 

	LaS funciones contienen una instrucción RETOURN que devuelve el	resultado de la función.

	Al invocar la función, simplemente escribimos su nombre seguido de los argumentos y al llegar a esa línea
	el flujo de ejecución deL programa, busca si hay una Función definida con ese nombre dentro del programa y comprueba
	si contiene los argumentos necesarios en número, los parametros los asume la funcción como suyos y realiza los cálculos con ellos.

	la función devuelve el resultado mediante la instrucción retourn: 

	Sin embargo, para que nosotros podamos comprobar qur realmente esto es lo que ha sucedido, tenemos que visualizar ese resultado
	por ejemplo mediante un echo:  
*/

function suma($num1,$num2){

	$resultado=$num1+$num2;
	return $resultado;
}
function frase_mayusc($frase, $conversion=true){
/*
	Se conoce como PARÁMETRO POR DEFECTO al parametro definido como $conversión, al invocar la función si no se indica nada,
	es decir, por defecto se entenderá que su valor es true, si queremos que su valor sea falso es necesario indicarlo
	al invocar la función y en ese caso se ejecutará en codigo del else en el siguiente condicional.
*/
	if ($conversion){
		/*
			utilizamos FUNCIONES ANIDADAS, en este caso demos una function predefinida como parte del código de una function propia
		*/
		$resultado=ucwords($frase); //pasa a mayuscula solo la primera letra de cada palabra
	}else{
		$resultado=strtoupper($frase); //pasa a mayuscula toda la frase
	}
	return $resultado;
}
echo "*************************<BR>";
echo "Ejecutamos la funcion propia que hemos llamado suma<br>";
echo "*************************<BR><BR>";

$var1=5;
$var2=9;
/*
	Vemos aquí como al llamar a las funciones se realiza el PASO DE PARÁMETROS, en este caso la variable $var1 será asumida por el parámetro
	$num1 de la función suma(), y del mismo modo pasa la $var2 al parámetro $num2;
*/
suma($var1,$var2);
echo "Para visualizar el Resultado, es necesario utilizar un echo o un print<br>";
echo $var1 . " + " . $var2 . " es igual a " . (suma($var1,$var2)) . "<br>";
echo "efectivamente el resultado de la función suma es, con estos parámetros: " . suma($var1,$var2);

echo "<br><br>*************************<BR>";
echo "Ejecutamos dos veces la funcion frase_mayusc la segunda indicamos false<br>";
echo "*************************<BR><BR>";

echo "" . frase_mayusc($frase);

echo "<br><br>" . frase_mayusc($frase, false);

?>
</body>
</html>