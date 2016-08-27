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

	<form action="vd1602_User_Pasw_2.php" method= "post" Name = "datos_usuario" id = "datos_usuario">
		<table width= "15%" align = "center">
			<tr>
				<td>Usuario:</td>
				<td><label for = "usuario"></label>
				<input type="text" name="usuario" id="usuario"></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><label for = "contra"></label>
				<input type="text" name="contra" id="contra"></td>
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
	
	/*
		Modificamos el Formulario para indicar USUARIO y CONTRASEÑA, en lugar de nombre_usuario y edad_usuario;
	*/

	?>
</body>
</html>