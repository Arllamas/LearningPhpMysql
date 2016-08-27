<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*
	Continuaremos con el mismo ejemplo del video anterior, ahora veremos como definir un método para asinar un nuevo valor a un atributo
	y veremos como invocar este método pasando los parámetros necesarios

	Tambien veremos como reutilizar este código
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
	/* definimos un método que reciba como parámetro el color y que asigne el color recibido al atributo color
	   de una instancia concreta.*/

	function establece_color($color_coche, $nombre_coche){
		$this->color=$color_coche;
		echo "<br><br> Hemos dado al " . $nombre_coche . " el color: " . $this->color;
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

echo "<br><br> El numero de ruedas del Seat es: " . $seat->ruedas;
echo "<br><br> Y el motor del seat es: " . $seat->motor;

/* Comprobamos que las instancias no tienen definida el color */

echo "<br><br> El color inicial del Seat es: " . $seat->color;

/* Aquí vamos dar color a las tres instancias que tenemos de la clase Coche */

$renault->establece_color("Rojo", "Renault");
$seat->establece_color("Azul", "Seat");
$mazda->establece_color("Blanco", "Mazda");

?>
</body>
</html>