<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
<style>
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
</head>
<body>
<h1> USANDO OPERADORES DE COMPARACIÓN </h1>

	<form action="" method= "post" Name = "datos_usuario" id = "datos_usuario">
		<table width= "15%" align = "center">
			<tr>
				<td>Nombre:</td>
				<td><label for = "nombre_usuario"></label>
				<input type="text" name="nombre_usuario" id="nombre_usuario"></td>
			</tr>
			<tr>
				<td>Edad:</td>
				<td><label for = "edad_usuario"></label>
				<input type="text" name="edad_usuario" id="edad_usuario"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="enviando"	id="enviando" value="enviar"></td>
			</tr>
		</table>
	</form>
	<?php
	/*situamos el código php después del formulario para que los mensajes tras la validación de los datos introducidos en el
		mismo se hagan visibles después o por debajo del formulario.*/

	/* Comprobamos que se ha pulsado el botón submit mediante la función de php isset() que devuelve un "1 true" si una variable
		está definida y no es NULL  o devuelve "0 false" en cualquier otro caso*/
		if(isset($_POST["enviando"])){
			$usuario=$_POST["nombre_usuario"];
			$edad=$_POST["edad_usuario"];
			if ($usuario=="Juan" && $edad==54){
				echo "<p class='validado'>Buen día $usuario, Bienvenido a nuestra web</p>";
			}else{
				echo "<p class='no_validado'>Acceso denegado</p>";
			}
		}

	/*podemos copiar todo el código php para la validación del formulario en un archivo php independiente, al que llamaríamos
	desde el propio formulario dando valor al action de la etiqueta <form> de modo que en lugar de action="" en las
	comillas vacias escribieramos el nombre del archivo php en el que tenemos el código de validación en nuestro caso
	vd0902_Validacion, es decir, sustituiríamos la etiqueta:
		<form action="" method= "post" Name = "datos_usuario" id = "datos_usuario">
	por la etiqueta con el action modificado:
		<form action="vd0902_Validacion" method= "post" Name = "datos_usuario" id = "datos_usuario">
	si queremos probar, tenemos que eliminar o comentar en el archivo actual todo el código php comprendido entre las
	etiquetas "<?php" y "?>" */
	?>
</body>
</html>