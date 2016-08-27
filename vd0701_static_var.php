<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
		
	//$contador=0;

	function incrementaContador(){
		
		//global $contador;
		
		static $contador=0;

		$contador++;

		echo $contador . "<br>";

		/* 
		   al finalizar la ejecución de una función, el valor de sus variables internas se destruye.
		   para conservar el valor de las variables, es necesario declarar las variables como static de este modo,
		   conseguimos dos cosas, por un lado la linea de declaración de variable solo se va a ejecutar una vez,
		   la primera vez que se llama a la function; y por otro lado, el valor de la variable declarada como static no
		   se destruye al finalizar la ejecución de la function.

		   otra solución pero hace el código mas complejo, consistiría en definir la variable fuera de la function y 
		   declararla global dentro como vimos en el video anterior.

		*/
	}
	
	incrementaContador();
	incrementaContador();
	incrementaContador();
	incrementaContador();
	incrementaContador();

?>


</body>
</html>