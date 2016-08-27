<html>
	<head>
	

	</head>

	<body>
		<h2>Hola Mundo</h2>

		<?php 

			$nombre="Antonio Rafael";

			/*declarar la variable global fuera de la function no funciona, ya que el objetivo es evitar
			 que desde una función interna o extrerna traida mediante un include o require, se pueda sobreescribir 
			 una variable local.

			 Por eso es necesario declarar la variable global dentro de la finction.

			 No obstante no se suele utilizar porque hay otros procedimientos como el paso de parámetros para 
			 sobre escribir una variable.
			 */

			//global $nombre;

			function dameNombre(){
				/* 
					Al declarar la variable como global, le estamos diciendo a la función dameNombre() que tome 
					la variable $nombre que ya se debe haber declarado fuera de la propia function.
				*/

				global $nombre;

				$nombre="El nombre es " . $nombre;

			}

			dameNombre();
			echo "<br>";
			print $nombre;
			echo "<br>";
			echo "<br>";
			echo "Mi primer programa en PHP";
			echo "<br>";
			echo +9+5;
		?>

	</body>

</html>