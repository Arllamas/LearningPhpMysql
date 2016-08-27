<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php

echo "*********************************************************************<BR>";
echo "BUCLES INDETERMINADOS (WHILE Y DO-WHILE) Y BUCLRES DETERMINADOS (FOR)<BR>";
echo "*********************************************************************<BR><BR>";

/*
	LOS BUCLES: SON ESTRUCTURAS REPETITIVAS QUE REPITEN EL CÓDIGO DE SU INTERIOR. Y TIENEN PRECISAMENTE ESTA FINALIDAD DE PODER REPETIR 
	UN MISMO CÓDIGO TANTAS VECES COMO DETERMINEN LAS CONDICIONES DE ENTRADA AL BUCLE. LOS BUCLES PUEDEN SER DE DOS TIPOS:
		-BUCLES INDETERMINADOS: NO SABEMOS ANTES DE EJECUTAR EL PROGRAMA CUANTAS VECES SE REPETIRÁ EL CODIGO INTERIOR DEL BUCLE. 
		EN PHP SON DOS: EL BUCLE WHILE Y EL BUCLE DO-WHILE SON PRÁCTICAMENTE EL MISMO CON UN PEQUEÑO MATIZ DIFERENCIADOR QUE VEREMOS
		EN ESTE VIDEO: EL BUCLE DO-WHILE ASEGURA QUE EL CODIGO INTERIOR SE EJECUTA POR LO MENOS UNA VEZ.
		-BUCLES DETERMINADOS: AQUELLOS QUE INCLUSO ANTES DE EJECUTAR EL PROGRMA PODEMOS SABER CUANTES VECES SE REPETIRÁ EL CÓDIGO.
		EL PRINCIPA ES EL FOR PRESENTE EN TODOS LOS LENGUAJES DE PROGRAMACIÓN O EN CASI TODOS. 

*/

echo "*************************<BR>";
echo "BUCLE INDETERMINADO WHILE<BR>";
echo "*************************<BR><BR>";

/*
	EL BUCLE INDETERMINADO WHILE Y PARA QUE SIRVE; 

	EL BUCLE WHILE EVALUA UNA CONDICIÓN DE ENTRADA Y SI SE CUMPLE ENTRATA EL FLUJO DE EJECUCIÓN DENTRO PARA EJECUTAR EL CODIGO DE SU
	INTERIOR UNA Y OTRA VEZ MIENTRAS (WHILE EN INGLES QUIERE DECIR MIENTRAS) LA CONDICIÓN SE SIGA CUMPLIENDO. SI AL LLEGAR EL FLUJO DE EJECUCIÓN AL BUCLE, SE EVALUA LA CONDICIÓN
	Y ESTA NO SE CUMPLE, EL PROGRAMA SALTA EL BUCLE Y CONTINUA SU EJECUCIÓN SIN QUE SE EJECUTE NI UNA SOLA VEZ EL CÓDIGO DE SU INTERIOR.

	ENTRE LAS UTILIDADES DE ESTE BUCLE, QUIZÁS LA MAS IMPORTANTE ES A LA HORA DE ACCEDER A UNA BASE DE DATOS Y RECORRER SUS REGISROS.
*/
	echo "<br>SE ESTÁ EJECUTANDO EL CÓDIGO ANTERIOR AL BUCLE WHILE<BR>";
	$var1=1;
	$var2=$var1;

	WHILE($var1<6){
		ECHO "EJECUCIÓN NÚMERO $var1 DEL BUCLE <br>";
		$var1++;
	}

	echo "SE ESTÁ EJECUTANDO EL CÓDIGO POSTERIOR AL BUCLE <BR>";
	echo ($var1-$var2-1)>0 ? "EL BUCLE SE HA EJECUTADO - " . ($var1-$var2) . " - VECES <BR><BR>" : "EL BUCLE NO SE HA EJECUTADO NINGUNA VEZ<BR><br>";


echo "*************************<BR>";
echo "BUCLE INDETERMINADO DO-WHILE<br>";
echo "*************************<BR><BR>";

/*
	EL BUCLE INDETERMINADO DO-WHILE Y PARA QUE SIRVE; 

	EL BUCLE DO-WHILE (HAZ MIENTRAS) ENTRAN EL EL BUCLE CON LA INSTRUCCIÓN DE ENTRADA DO (HAZ) Y EJECUTA TODO EL CÓDIGO DEL BUCLE,
	A LA SALIDA SE ENCUENTRA EL WHILE Y LA CONCCIÓN, EL FLUJO DEL PROGRAMA EVALUA LA CONDICIÓNCON Y SI SE CUMPLE REPITE EL BUCLE;
	SI LA CONDICIÓN NO SE CUMPLE SALE DEL BUCLE CONTINUANDO LA EJECUCIÓN DEL PROGRAMA, PERO EL CODIGO DEL BUCLE SE HABRÁ EJECUTADO
	COMO MÍNIMO UNA PRIMERA VEZ.

	EL BUCLE WHILE PUEDE DARSE EL CASO DE QUE EL CODIGO DE SU INTERIOR NO SE EJECUTE NINGUNA VEZ.
*/
	echo "<br>SE ESTÁ EJECUTANDO EL CÓDIGO ANTERIOR AL BUCLE DO-WHILE <BR>";
	$var1=0;
	$var2=$var1;

	Do{
		ECHO "EJECUCIÓN NÚMERO - " . ($var1-$var2+1) . " - DEL BUCLE <br>";
		$var1++;
	}While($var1<6);

		echo "SE ESTÁ EJECUTANDO EL CÓDIGO POSTERIOR AL BUCLE <BR>";
		echo ($var1-$var2-1)>0 ? "EL BUCLE DO-WHILE SE HA EJECUTADO - " . ($var1-$var2) . " - VECES <BR><BR>" : "EL BUCLE SE HA EJECUTADO UNA SOLA VEZ <br><br>";


echo "*************************<BR>";
echo "BUCLE DETERMINADO FOR<BR>";
echo "*************************<BR><BR>";
/*
	bucle determinado for: es determinado porque podemos sabera a priori el número de veces que se repetirá; su sintaxis es
	 for(iniciación;condición;incremento o decremento); veamos un ejemplo:
*/

	 for ($i=0;$i<=10;$i++){

	 	echo "se ha ejecutado el bucle - " . ($i+1) . " - veces<br>";

	 }
/*
	podemos hacer tantas variantes como queranos modificando la inicialización, la condición y el incremento o decrenmento, veamos
	otro ejemplo con el mismo resultado
*/
echo "<br>*************************<BR>";
echo " Variante del bucle for con el mismo resultado<BR>";
echo "*************************<BR><BR>";
	$j=1;
	 for ($i=20;$i>=0;$i-=2){
	 	echo "se ha ejecutado el bucle - " . $j . " - veces<br>";
	 	$j++;
	 }

echo "<br>*************************<BR>";
echo " BREAK - SENTENCIA DE RUPTURA DEL BUCLE<BR>";
echo "*************************<BR><BR>";
/*
	SI ESTANDO DENTRO DEL BUCLE QUEREMOS QUE AL CUMPLIRSE UNA CONDICIÓN EL PROGRAMA INTERRUMPA LA EJECUCIÓN DEL BUCLE
	 Y CONTINUE LA EJECUCIÓN DEL PROGRAMA, TENEMOS QUE UTILIZAR LA SENTENCIA BREAK; VEAMOS UN EJEMPLO: VAMOS A
	 INTERRUMPIR EL BUCLE ANTERIOR CUANDO SE HAYA EJECUTADO CINCO VECES:
*/

	$j=1;
	 for ($i=20;$i>=0;$i-=2){
	 	if ($j==6){
	 		break;
	 	}
	 	echo "se ha ejecutado el bucle - " . $j . " - veces<br>";
	 	$j++;
	 }
	 echo "después de la quinta ejecución del bucle forzamos la salida con un BREAK<br>";

echo "<br>*************************<BR>";
echo " CONTINUE - SALTA UNA EJECUCIÓN DEL BUCLE<BR>";
echo "*************************<BR><BR>";
/*
	SI ESTANDO DENTRO DEL BUCLE QUEREMOS QUE AL CUMPLIRSE UNA CONDICIÓN EL PROGRAMA
	 SALTE LA EJECUCIÓN DEL BUCLE EN LA QUE ESTAMOS, PERO CONTINUE DENTRO DEL BUCLE 
	 CON LA SIGUIENTE EJECUCIÓN UTILIZAMOS LA SENTENCIA CONTINUE; VEAMOS UN EJEMPLO:
*/

	 for ($i=5;$i>=-5;$i--){
	 	if ($i==0){
	 		ECHO "AQUÍ SALTAMOS ESTA EJECUCIÓN DEL BUCLE PARA EVITAR EL ERROR DE DIVIDIR POR CERO<BR>";
	 		CONTINUE;
	 	}
	 	echo "EL RESULTADO DE DIVIDIR 500 ENTRE " . $i . " ES: " . (500/$i) . "<br>";
	 
	 }
?>

</body>
</html>