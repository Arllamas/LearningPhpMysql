<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*
	Continuaremos con el mismo ejemplo del video anterior, para ver como se definen los ATRIBUTOS y METODOS de los objetos en una clase;
	Como cambiar esas propiedades y funcionalidades y cómo llamar a los métodos pertenecientes a los objetos.

	Los objetos en programación deben tener un estado inicial, es decir sus atributos, que una vez creado "instanciado" el objeto podrán
	cambiar, pueden tener unos valores iniciales; el conjunto de valores iniciales de sus atributos es lo que se conoce como ESTADO INICIAL.
	estos valores iniciales los recibe como parámetros en el momento de instanciar la clase y pasan directamente a un método muy especifico
	de las clases que es el METODO CONSTRUCTOR.

	EL MÉTODO CONSTRUCTOR se define dentro de la clase como cualquier otro método, es decir, como si fuera una function dentro de la
	propia clase, pero se reconoce porque obligatoriamente  tiene que tener el mismo nombre que la clase.
*/

CLASS Coche{
	/*Atributos de nuestra clase coche: cada atributo se define como una variable*/
	var $ruedas;
	var $color;
	var $motor;
	/*Métodos de nuestra clase coche: cada método se define como una función dentro de la clase, es frecuente situar en primer lugar el 
	  MÉTODO CONSTRUCTOR que se define, como hemos dicho, como cualquier otro método, pero se reconoce porque obligatoriamente tiene que tener
	  el mismo nombre que la clase.
	*/
	 function Coche(){
	 	$this->ruedas=4;
	 	$this->color="";
	 	$this->motor=1600;


	 }

	function arrancar(){
		echo "Estoy arrancando <br><br>";
	}

	function girar(){
		echo "Estoy girando<br><br>";
	}

	function frenar(){
		echo "Estoy frenando<br><br>";
	}


}
/* Aquí realmente lo que estamos haciendo es llamar al método constructor Coche() lo hacemos con la parabra reservada new;
 y es este métodoque se encarga de crear la nueva instancia que asignamos al nombre que hemos escogido; de este modo lo que
 estamos haciendo es dar un ESTADO INICIAL a nuestro nuevo objeto; en este caso todos tendrán 4 ruedas motor de 1600 y color
 sin definir */

$renault=new coche();
$mazda=new coche();
$seat=new coche();

/* supongamos ahora que queremos que el mazda gire, lo que haremos es invocar a su metodo y lo haremos del siguiente modo */

$mazda->girar();

/* tambien podemos pedir que nos muestre el valor actual de sus atributos, por ejemplo el numero de ruedas y el motor
 que tiene, por ejemplo el seat, aunque con el constructor actual todos tienen inicialmente el mismo número de ruedas y el mismo motor */

echo "<br><br> El numero de ruedas es: " . $seat->ruedas;
echo "<br><br> Y el motor es: " . $seat->motor;

?>
</body>
</html>