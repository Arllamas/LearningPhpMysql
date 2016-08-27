<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*

	var1==var2; son iguales
	var1===var2; son identicas, es decir, son iguales y del mismo tipo
	var1!=var2; son diferentes, las dos variables no son iguales
	var1<>var2; son diferentes, las dos variables no son iguales y/o no son del mismo tipo
	var1<var2; es menor que
	var1>var2; es mayor que
	var1<var2; es menor o igual que
	var1>=var2; es mayor o igual que



*/

	$var1=8;
	$var2="8";
	$var3="Antonio Rafael";

	echo '$var1=8';
	echo '<br>$var2="8"';
	echo '<br>$var3="Antonio Rafael"<br>';

	if ($var1==$var2) {

			echo '<br>Las variables $var1 y $var2 son iguales<br>';

		}else{

			echo '<br>Las variables $var1 y $var2 no son iguales<br>';
		}

	if ($var1===$var2) {

			echo '<br>Las variables $var1 y $var2 son identicas<br>';

		}else{

			echo '<br>Las variables $var1 y $var2 no son identicas<br>';
		}

	if ($var1!=$var3) {

			echo '<br>Las variables $var1 y $var3 son diferentes<br>';

		}else{

			echo '<br>Las variables $var1 y $var3 no son diferentes<br>';
		}		

	if ($var1<>$var3) {

			echo '<br>Las variables $var1 y $var3 son diferentes<br>';

		}else{

			echo '<br>Las variables $var1 y $var3 no son diferentes<br>';
		}	
?>
</body>
</html>