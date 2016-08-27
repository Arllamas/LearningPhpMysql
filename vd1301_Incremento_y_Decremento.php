<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<p>&nbsp</p>
*** esto es un comentario ***
<form name="form1" method="post" action="">
	<p>
		<label for="num1"></label>
		<input type="text"  name="num1"   id="num1">
		<label for="num2"></label>
		<input type="text"  name="num2"   id="num2">
		<label for="operacion"></label>
		<select name="operacion"   id="operacion">
			<option>Suma</option>
			<option>Resta</option>
			<option>Multiplicación</option>
			<option>División</option>
			<option>Módulo</option>
			<option>Incremento</option>
			<option>Decremento</option>
		</select>
	</p>
	<p>
		<input type="submit" name="button" id="button" value="enviar" onClick="prueba">
	</p>
</form>

<p>&nbsp</p>

<?php

include ("vd1302_Incremento_y_Decremento.php");

if (isset($_POST["button"])){

	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$operacion=$_POST["operacion"];

/*
	para realizar los cálculos, es necesario invocar desde aquí a la función Calcular($num1;$num2;$calculo) a la que endremos que pasar los parámetros necesarios, es decir los recibidos desde el formulario.
*/

	Calcular($numero1,$numero2,$operacion);

}

?>

</body>
</html>