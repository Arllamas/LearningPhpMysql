<doctype html>
<html>
<style>
/

	/* Selectores de etiquetas */
	h1{

		text-align: center;
	}
	table{

		background-color: #FFC;
		padding: 5px;
		border: #666 5px solid;
	}
	/* Selectores de clase */
	.no_validado{
		font-size: 18px;
		color: #F00;
		font-weight: bold;
	}
	.validado{
		font-size: 18px;
		color: #0C3;
		font-weight: bold;
	}
	
</style>
<head>
<meta charset="utf-8">
<title>Documento si titulo</title>
</head>
<body>
<?php
if (isset($_POST["enviando"])){
	$edad=$_POST["edad_usuario"];
	if ($edad<18){
		echo "ERES MENOR DE EDAD";
	}else if ($edad<=40){
		echo "ERES JOVEN";
	}else if ($edad<=65){
		echo "ERES MADURO";
	}else{
		echo "ERES MAYOR";
	}
/* EN OCASIONES LOS PROGRAMAS NO RECONOCEN DETERMINADOS CARACTERES ACENTUADOS, POR EJEMPLO QUEREMOS QUE DECIR "Cuídte"
	y el programa nos devuelve "CuÃdate"; lo resolvemos con caracteres especiales que comienzan por &, escribiendo "Cu&iacute;date"*/
}

?>
</body>
</html>