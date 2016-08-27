<style>

	.resultado{
		color: F00;
		font-weight: bold;
		font-size: 32px;
	}


</style>


<?php
/*
	Separamos por un lado la captura de parámetros que llegan desde el formulario vd1201_Calculadora.html, de los propios cálculos que realizaremos con estos parámetros y que integraremos en la función Calcular()
*/

if (isset($_POST["button"])){

	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$operacion=$_POST["operacion"];

/*
	para realizar los cálculos, es necesario invocar desde aquí a la función Calcular($num1;$num2;$calculo) a la que endremos que pasar los parámetros necesarios, es decir los recibidos desde el formulario.
*/

	Calcular($numero1,$numero2,$operacion);

}

function Calcular($num1,$num2,$calculo){
	$resultado;
	if (!strcmp($calculo, "Suma")){
		$resultado=$num1+$num2;
		echo "<br><p class='resultado'>El resultado de la suma es: $resultado</p>";
	}else if (!strcmp($calculo, "Resta")){
		$resultado=$num1-$num2;
		echo "<br><p class='resultado'>El resultado de la resta es: $resultado</p>";
	}else if (!strcmp($calculo, "Multiplicación")){
		$resultado=$num1*$num2;
		echo "<br><p class='resultado'>El resultado de la multiplicación es: $resultado</p>";
	}else if (!strcmp($calculo, "División")){
		$resultado=$num1/$num2;
		echo "<br><p class='resultado'>El resultado de la división es: $resultado</p>";
	}else if (!strcmp($calculo, "Módulo")){
		$resultado=$num1%$num2;
		echo "<br><p class='resultado'>El módulo es: $resultado</p>";
	}
}

?>