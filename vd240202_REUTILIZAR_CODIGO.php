<?php
/*
	Siguendo con el ejemplo anterior, vamos a copiar solo la clase coche en un archivo exclusivo php sin código html
	y vamos a definor una nueva clase en el mismo archivo que vamos a llamar Camion, la primera con mayúscula y sin acento
	ni caracteres raros; su constructor tambien se va a llamar obligatoriamente Camion y nos va a establecer como
	estado inicial de todas las instancias de esta clase camión que tienen 8 ruedas y un motor de 2600
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

//************************************************************************************************************************************

/*
	Vamos a quitar a la clase Camion el metodo establecer_color ya que no lo va a necesitar porque en su constructor
	vamos a establecer el calor de todos como "Gris"
*/


CLASS Camion{
	/*Atributos de nuestra clase camion*/
	var $ruedas;
	var $color;
	var $motor;
	/*Métodos de nuestra clase Camion; el MÉTODO CONSTRUCTOR obligatoriamente tiene que llamarse como la clase, es decir Camion.
	*/
	function Camion(){
	 	$this->ruedas=8;
	 	$this->color="Gris";
	 	$this->motor=2600;
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
	
	/*
	function establece_color($color_coche, $nombre_coche){
		$this->color=$color_coche;
		echo "<br><br> Hemos dado al " . $nombre_coche . " el color: " . $this->color;
	}
	*/
}
?>
