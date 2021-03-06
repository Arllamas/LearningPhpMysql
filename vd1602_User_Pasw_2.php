<doctype html>
<html>
<style>
/

	/* Selectores de etiquetas */
	h1{

		text-align: center;
	}
	table{

		background-color: #FFC;
		padding: 5px;
		border: #666 5px solid;
	}
	/* Selectores de clase */
	.no_validado{
		font-size: 18px;
		color: #F00;
		font-weight: bold;
	}
	.validado{
		font-size: 18px;
		color: #0C3;
		font-weight: bold;
	}
	
</style>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php

/* El OPERADOR TERNARIO: PUEDE UTILIZARSE EN SUSTITUCIÓN DEL IF CUANDO SOLO SE EVALUA UN CASO; 
	ES DECIR, O LA CONDICIÓN SE CUPLE Y ENTONCES SE EJECUTA UN CODIGO; O POR EL CONTRARIO LA CONDICIÓN NO SE CUMPLE Y SE EJECUTA OTRO.

	No es habitual verlo en codigo de programación pero tiene su utilidad

   SU EXPRESIÓN ES LA SIGUIENTE:
   		CONDICIÓN ? EJECUTAR SI VERDADERO : EJECUTAR SI FALSO
   	VEAMOS UN EJEMPLO: UTILIZAREMOS EL MISMO FORMULARIO QUE VENIMOS UTILIZANDO EN EL VIDEO ANTERIOR PARA EVALUAR AHORA
   	SI DAMOS ACCESO O NO EN FUNCIÓN DE QUE LA EDAD DEL USUARIO SEA MENOR DE 18 O MAYOR O IGUAL QUE 18, ES DECIR MENOR O MAYOR DE EDAD:	
*/	
if (isset($_POST["enviando"])){
	$usuario=$_POST["usuario"];
	$contra=$_POST["contra"];

	echo "<br>El usuario es: " . $usuario;
	echo "<br>La contraseña es: $contra<br>";


	echo $usuario=="Antonio" && $contra==7777 ? "<br> <p class='validado'> BIENVENIDO - SU ACCESO HA SIDO AUTORIZADO</p>" : "<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
/* También podemos en lugar de mostrarlo directamente, almacenar el resultado en una variable para posteriormente
 	mostrarlo o utilizarlo cuando sea necesario.
*/
 	$resultado=$usuario=="Antonio" && $contra=="7777" ? "<br> <p class='validado'> BIENVENIDO - SU ACCESO HA SIDO AUTORIZADO</p>" : "<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
	echo "<br><br> $resultado";
}
/*
	El operador ternario tambien permite evaluar condiciones complejas que utilicen los operadóres lógicos, por ejemplo vamos autilizar el mismo formulario
	 para comprobar que a; nos servirá para futuras comprobaciones de usuario y contraseña; vamos a modificar un poco el formulario en :
*/

?>
</body>
</html>