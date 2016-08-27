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

/* EL CONDICIONAL SWITCH CASE: SE UTILIZA EN LOS CASOS EN QUE HAY QUE EVALUAR MULTIPLES POSIBLES OPCIONES DIFERENTES
	COMO ES EL CASO DE COMPROBAR SI EL USUARIO INTRODUCIDO ES UNO DE LOS USUARIOS REGISTRADOS. HAY DOS POSIBLES SINTAXIS:

		- LA PRIMERA [SWITCH: Y ENDSWITCH] QUE COMENZARÍA CON	"SWITCH (CONDICIÓN A EVALUAR):", LE SEGUIRIAN LOS DISTINTOS CASE OPCION N: //
		 EL CODIGO A EJECUTAR EN LA OPCIÓN; // BREAK;" PARA TERMINAR CON "DEFAULT: // CODIGO A EJECUTAR;// ENDSWITCH; " 
	
		-LA SEGUNDA SINTÁXI [SWUITCH{}] QUE COMENZARÍA CON	"SWITCH (CONDICIÓN A EVALUAR){"; LE SEGUIRIAN LOS DISTINTOS CASE OPCION N: //
		 CODIGO A EJECUTAR; // BREAK; ", PARA TERMINAR CON "DEFAULT: // CODIGO A EJECUTAR; // } "

	LAS DOS FUNCIONAN EN PHP AUNQUE ES PREFERIBLE UTILIZAR LA SEGUNDA QUE ES MAS COMÚN CON OTROS LENGUAJES COMO JAVA, JAVASCRIPT, ETC
	VEAMOS UN EJEMPLO
*/	

/*
En este primer código utilizamos Switch Case en la versión Switch{} combinada con el operador terciario el cual podría haber sido
 sustituido por un if, pero el resultado habría sdo un código con mas líneas. procedemos a comentar esta solución para mostrar
 la solución que nos parece mas adecuada 
*/

 /*
 if (isset($_POST["enviando"])){
	$usuario=$_POST["usuario"];
	$contra=$_POST["contra"];

	echo "<br>El usuario es: " . $usuario;
	echo "<br>La contraseña es: $contra<br>";

	SWITCH ($usuario){
		case "Antonio":
			$resultado=$contra==7777 ? "<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>" : "<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
			break;
		case "María":
			$resultado=$contra==1010 ? "<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>" : "<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
			break;
		case "Alberto":
			$resultado=$contra==1111 ? "<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>" : "<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
			break;
		case "Juan":
			$resultado=$contra==6666 ? "<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>" : "<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
			break;
		default:
			$resultado="<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
	}

	echo $resultado;
}
*/

if (isset($_POST["enviando"])){
	
	$usuario=$_POST["usuario"];
	$contra=$_POST["contra"];

	echo "<br>El usuario es: " . $usuario;
	echo "<br>La contraseña es: $contra<br>";
	/*
	SWITCH (true):
			case $usuario=="Antonio" && $contra==7777:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			case $usuario=="María" && $contra==1010:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			case $usuario=="Alberto" && $contra==1111:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			case $usuario=="Juan" && $contra==6666:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			default:
				$resultado="<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
	ENDSWITCH;
	*/

	/*
		Con la otra sintaxis del switch sería 
	*/

	SWITCH (true){
			case $usuario=="Antonio" && $contra==7777:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			case $usuario=="María" && $contra==1010:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			case $usuario=="Alberto" && $contra==1111:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			case $usuario=="Juan" && $contra==6666:
				$resultado="<br> <p class='validado'> Buen día $usuario - Su acceso ha sido autorizado</p>";
				break;
			default:
				$resultado="<br> <p class='no_validado'> ACCESO DENEGADO - USUARIO Y CONTRASEÑA NO SE CORRESPONDEN</p>";
	}
		echo $resultado;
}

?>
</body>
</html>