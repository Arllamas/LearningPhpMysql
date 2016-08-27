<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*
	Siguendo con el ejemplo anterior, vamos a copiar solo la clase coche en un archivo exclusivo php sin código html
	llamaremos a este archivo vd240202_REUTILIZAR_CODIGO y vamos a definir en el una nueva clase en el mismo archivo 
	que vamos a llamar Camion, la primera con mayúscula y sin acento ni caracteres raros; su constructor tambien se
	va a llamar obligatoriamente Camion y nos va a establecer como estado inicial de todas las instancias de esta clase
	camión que tienen 8 ruedas y un motor de 2600.

	lo que haremos es utilizar include o require para utilizar el codigo de las clases alli donde las podamos utilizar.

	Por ejemplo aquí eliminamos la clase Coche del ejemplo del video anterior y la sustituimos por el include del siguiente modo.
*/

include("vd240202_REUTILIZAR_CODIGO.php");

/*
En php al llamar al constructor cuando este no requiere parámetros se pueden omitir los paréntesis, pero como en otros
lenguajes como Java son obligatorios, cuesta poco mantenerlos.

Podría suceder que una clase no tuviera definido el constructor, el lo que se conoce como CONSTRUCTOR POR DEFECTO,
equivalente a definir el constructor pero sin código en su interior;en este caso se puede llamar al constructor siempre con el
nombre de la clase y con o sin los paréntesis.

Este código funciona con los mismos resultados que el del vd2401_METODOS.php
*/

$renault=new coche();
$mazda=new coche();
$seat=new coche();

/* supongamos ahora que queremos que el mazda gire, lo que haremos es invocar a su metodo y lo haremos del siguiente modo */

$mazda->girar();

/* tambien podemos pedir que nos muestre el valor actual de sus atributos, por ejemplo el numero de ruedas y el motor
 que tiene, por ejemplo el seat, aunque con el constructor actual todos tienen inicialmente el mismo número de ruedas y el mismo motor */

echo "<br><br> El numero de ruedas del Seat es: " . $seat->ruedas;
echo "<br><br> Y el motor del seat es: " . $seat->motor;

/* Comprobamos que las instancias no tienen definida el color */

echo "<br><br> El color inicial del Seat es: " . $seat->color;

/* Aquí vamos dar color a las tres instancias que tenemos de la clase Coche */

$renault->establece_color("Rojo", "Renault");
$seat->establece_color("Azul", "Seat");
$mazda->establece_color("Blanco", "Mazda");

//***********************************************************************************************************************************

/*
	Desde aquí vamos ahora a crear dos nuevas instancias, una de la clase Coche y otra de la clase Camión
*/
	$kia=new Coche();
	$pegaso=new Camion();
/*
	Veamos cuantas ruedas tiene cada uno de ellos 
*/
	echo "<br><br> El numero de ruedas del kia es: " . $kia->ruedas;
	echo "<br><br> El numero de ruedas del pegaso es: " . $pegaso->ruedas;

/*
	Vamos a quitar a la clase Camion el metodo establecer_color ya que no lo va a necesitar porque en su constructor
	vamos a establecer el calor de todos como "Gris"

	Ahora veremos que podemos utilizar el metodo establecer_color para $kia, pero no para $pegaso  y comprobamos que $kia 
	toma el color que le establezcamos mientras que $pegaso tiene el color "Gris" que establece como estado inicial su constructor:
*/

	$kia->establece_color("Beig", "Kia");

	//$pegaso->establece_color("Verde", "Pegaso");

	echo "<br><br> El color del Pegaso es: " . $pegaso->color . " desde su instanciación o construcción";





?>
</body>
</html>