<doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
/*
	PROGRAMACIÓN ORIENTADA A OBJETO (POO): Pretende trasladar los objetos de la vida real y su comportamiento al código de programación.
	El objetivo perseguido es la reutilización del código y hacer más fácil la programación. En la vida real nos encontramos con objetos,
	personal mesas, arboles, cohes, etc. que tienen cada uno de ellos unas propiedades o caracteristicas y unos comportamientos o 
	funcionalidades.

	Debemos diferenciar entre:
		-OBJETOS: Como hemos dicho tienen una serie de ATRIBUTOS caracteristicas y una serie de MÉTODOS comportamientos o funcionalidades
		que las diferencian de otros objetos
		-CLASES: es el modelo programado en el que se redactan las características ATRIBUTOS y comportamientos MÉTODOS comunes a un conjunto de objetos;
		así el OBJETO es el coche y	la CLASE es el modelo programado en el que se definen sus caracteristicas y comportamientos;
		una funcionalidad de toda clase es la de construir ejemplares de esa clase.
		-INSTANCIAS: es un EJEMPLAR perteneciente a una clase; es un OBJETO CONCRETO perteneciente al grupo o conjunto de objetos
		de caracteristicas y funcionalidades definidas por una CLASE que se diferencia de los demás OBJETOS de la CLASE porque
		tiene unos valores concretos de sus características y unas funcionalidades análogas pero tambien exclusivas de ese EJEMPLAR.

	Veamos el primer ejemplo de clase:
		-Se definen con la palabra reservada CLASE y el nombre por convención debe llevar la primera letra en mayúscula; entre llaves {} 
		definiremos el codigo con los atributos y funcionalidades de la clase
		-Una vez definida la Clase, instanciaremos para tener algunos ejemplares de la clase coche; para ello a cada instancia le daremos
		un nombre definido como si se tratase del nombre de una variable a la que le asignamos la propia instancia construida utilizando
		la palabra reservada new seguida del nombre de la clase y entre paréntesis los aributos necesarios para construir el ejemplar.
		-Si la clase no tiene definido el constructor como en nuestro primer ejemplo, en el que hemos definido la Clase pero no sus
		características y funcionalidades, se tomará el constructor por defecto que no necesita	pasar parámetros.
*/

CLASS Coche{


}

$renault=new coche();
$mazda=new coche();
$seat=new coche();
?>
</body>
</html>