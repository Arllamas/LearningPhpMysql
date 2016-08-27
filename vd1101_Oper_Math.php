<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>

<p>&nbsp</p>

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
		</select>
	</p>
	<p>
		<input type="submit" name="button" id="button" value="enviar" onClick="prueba">
	</p>
</form>

<p>&nbsp</p>

<?php
/*
	los operadores matemáticos que podemos encontrar en php para realizar operaciones matemáticas sencillas son:
		+, -, *, /, % (se llama operador MODULO y devuelve el resto de una división), ++ ó += (incremento),
		-- ó -= (decremento)
*/

if (isset($_POST["button"])){

	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$operacion=$_POST["operacion"];

	if (!strcmp($operacion, "Suma")){
		echo "<br>El resultado de la suma es: " . ($numero1+$numero2);
	}else if (!strcmp($operacion, "Resta")){
		echo "<br>El resultado de la resta es: " . ($numero1-$numero2);
	}else if (!strcmp($operacion, "Multiplicación")){
		echo "<br>El resultado de la multiplicación es: " . ($numero1*$numero2);
	}else if (!strcmp($operacion, "División")){
		echo "<br>El resultado de la división es: " . ($numero1/$numero2);
	}else if (!strcmp($operacion, "Módulo")){
		echo "<br>El módulo es: " . ($numero1%$numero2);
	}

}

?>
</body>
</html>